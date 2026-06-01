var myCarousel = document.querySelector('#myCarousel')


document.addEventListener("DOMContentLoaded", function () {
    // Configuration - dynamic based on screen size
    let itemsPerSlide = window.innerWidth < 720 ? 1 : 3; // Responsive items per slide
    const totalItems = 9; // Total real items (without clones)
    let slideBy = window.innerWidth < 720 ? 1 : 1; // How many items to advance/retreat per click

    // DOM elements
    const carousel = document.getElementById("multiCarousel");
    const carouselInner = document.getElementById("carouselInner");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    if (!carousel || !carouselInner || !prevBtn || !nextBtn) {
        return;
    }

    // Function to update configuration based on screen size
    function updateConfig() {
        const isMobile = window.innerWidth < 720;
        itemsPerSlide = isMobile ? 1 : 3;
        slideBy = isMobile ? 1 : 1;
    }

    // Dynamically add clone elements
    function initializeClones() {
        const originalItems = Array.from(
            document.querySelectorAll(".multi-carousel-item:not(.clone)")
        );

        // Clear existing clones
        document.querySelectorAll(".clone").forEach((clone) => clone.remove());

        // Prepend clones of last items
        const lastClones = originalItems
            .slice(-itemsPerSlide)
            .map((item) => {
                const clone = item.cloneNode(true);
                clone.classList.add("clone");
                return clone;
            })
            .reverse();
        lastClones.forEach((clone) => carouselInner.prepend(clone));

        // Append clones of first items
        const firstClones = originalItems.slice(0, itemsPerSlide).map((item) => {
            const clone = item.cloneNode(true);
            clone.classList.add("clone");
            return clone;
        });
        firstClones.forEach((clone) => carouselInner.append(clone));
    }

    // Calculate and set the height for carousel items (without heading dependency)
    function setCarouselHeight() {
        // Calculate available height without depending on heading element
        const windowHeight = window.innerHeight;
        const carouselContainer = carousel.closest(".container-fluid");

        // Get the carousel container's offset from top
        const containerRect = carouselContainer
            ? carouselContainer.getBoundingClientRect()
            : { top: 0 };
        const availableHeight = windowHeight - containerRect.top - 100; // 100px for padding/margins

        // Set a minimum height to ensure carousel is always visible
        const carouselHeight = Math.max(availableHeight, 300);

        document.documentElement.style.setProperty(
            "--carousel-height",
            `${carouselHeight}px`
        );
    }

    // Initial setup
    updateConfig();
    initializeClones();
    setCarouselHeight();

    // Start with the first real set of images
    let currentIndex = 0; // Index of current visible center image (0 to totalItems-1)
    let position = itemsPerSlide; // Real position considering clones
    let isAnimating = false;

    // Update carousel position
    function updateCarouselPosition(animate = true) {
        if (animate) {
            carouselInner.style.transition = "transform 0.5s ease";
        } else {
            carouselInner.style.transition = "none";
        }

        const translateX = (position * -100) / itemsPerSlide;
        carouselInner.style.transform = `translateX(${translateX}%)`;
    }

    // Initialize position
    updateCarouselPosition(false);

    // Handle transition end
    carouselInner.addEventListener("transitionend", function () {
        isAnimating = false;

        // Handle infinite loop logic
        if (position >= totalItems + itemsPerSlide) {
            position = itemsPerSlide + (position - (totalItems + itemsPerSlide));
            updateCarouselPosition(false);
        } else if (position < itemsPerSlide) {
            position = totalItems + position;
            updateCarouselPosition(false);
        }

        currentIndex = (position - itemsPerSlide) % totalItems;
    });

    // Navigation functions
    function next() {
        if (isAnimating) return;
        isAnimating = true;
        position += slideBy;
        updateCarouselPosition();
    }

    function prev() {
        if (isAnimating) return;
        isAnimating = true;
        position -= slideBy;
        updateCarouselPosition();
    }

    // Event listeners for buttons
    nextBtn.addEventListener("click", next);
    prevBtn.addEventListener("click", prev);

    // Mouse drag functionality
    let isDragging = false;
    let startX = 0;
    let startPosition = 0;

    // Prevent image drag
    const carouselImages = document.querySelectorAll("#carouselInner img");
    carouselImages.forEach((img) => {
        img.addEventListener("dragstart", (e) => {
            e.preventDefault();
        });
        img.style.pointerEvents = "none";
    });

    carousel.addEventListener("mousedown", startDrag);
    carousel.addEventListener("touchstart", startDrag, { passive: true });

    carousel.addEventListener("mousemove", drag);
    carousel.addEventListener("touchmove", drag, { passive: true });

    carousel.addEventListener("mouseup", endDrag);
    carousel.addEventListener("touchend", endDrag);
    carousel.addEventListener("mouseleave", endDrag);

    function startDrag(e) {
        if (e.target.tagName === "IMG") {
            e.preventDefault();
        }

        if (isAnimating) return;

        isDragging = true;
        startX = e.type.includes("mouse") ? e.clientX : e.touches[0].clientX;
        startPosition = position;
        carousel.classList.add("dragging");
        carouselInner.style.transition = "none";
        document.body.style.cursor = "grabbing";
        document.body.style.userSelect = "none";
        registerUserActivity();
    }

    function drag(e) {
        if (!isDragging) return;

        const x = e.type.includes("mouse") ? e.clientX : e.touches[0].clientX;
        const walk = ((x - startX) / carousel.offsetWidth) * itemsPerSlide;
        const newPosition = startPosition - walk;
        const translateX = (newPosition * -100) / itemsPerSlide;
        carouselInner.style.transform = `translateX(${translateX}%)`;
    }

    function endDrag(e) {
        if (!isDragging) return;

        isDragging = false;
        carousel.classList.remove("dragging");
        document.body.style.cursor = "";
        document.body.style.userSelect = "";
        carouselInner.style.transition = "transform 0.5s ease";

        const x = e.type?.includes("mouse")
            ? e.clientX
            : e.changedTouches
                ? e.changedTouches[0].clientX
                : startX;
        const walk = ((x - startX) / carousel.offsetWidth) * itemsPerSlide;

        if (walk > 0.2) {
            prev();
        } else if (walk < -0.2) {
            next();
        } else {
            updateCarouselPosition();
        }

        registerUserActivity();
    }

    // Keyboard navigation
    document.addEventListener("keydown", function (e) {
        if (
            carousel.offsetParent === null ||
            document.activeElement.tagName === "INPUT" ||
            document.activeElement.tagName === "TEXTAREA" ||
            document.activeElement.isContentEditable
        ) {
            return;
        }

        switch (e.key) {
            case "ArrowLeft":
                e.preventDefault();
                prev();
                registerUserActivity();
                break;
            case "ArrowRight":
                e.preventDefault();
                next();
                registerUserActivity();
                break;
        }
    });

    // Auto-advance system
    let autoAdvanceInterval;
    let userActivityTimeout;

    function startAutoAdvance() {
        clearInterval(autoAdvanceInterval);
        autoAdvanceInterval = setInterval(next, 5000);
    }

    function resetAutoAdvanceTimer() {
        clearTimeout(userActivityTimeout);
        clearInterval(autoAdvanceInterval);
        userActivityTimeout = setTimeout(startAutoAdvance, 10000);
    }

    function registerUserActivity() {
        resetAutoAdvanceTimer();
    }

    startAutoAdvance();

    carousel.addEventListener("mouseenter", () => {
        clearInterval(autoAdvanceInterval);
    });

    carousel.addEventListener("mouseleave", () => {
        resetAutoAdvanceTimer();
    });

    carousel.addEventListener("click", registerUserActivity);
    carousel.addEventListener("wheel", registerUserActivity);

    // Handle window resize
    window.addEventListener("resize", function () {
        const wasMobile = itemsPerSlide === 1;
        updateConfig();
        setCarouselHeight();

        // Only reinitialize if mobile state changed
        if (
            (wasMobile && itemsPerSlide > 1) ||
            (!wasMobile && itemsPerSlide === 1)
        ) {
            initializeClones();
            position = itemsPerSlide; // Reset position
            updateCarouselPosition(false);
        }
    });
});


function googleTranslateElementInit() {

    new google.translate.TranslateElement(
        {
            pageLanguage: 'en',
            includedLanguages: 'fr,en,ar',
            autoDisplay: false
        },
        'google_translate_element'
    );

}

// Dropdown Toggle
const dropdown = document.getElementById('languageDropdown');

dropdown.addEventListener('click', function (e) {

    dropdown.classList.toggle('active');

    e.stopPropagation();

});

// Close dropdown outside
document.addEventListener('click', function () {

    dropdown.classList.remove('active');

});

// Change Language
function changeLanguage(lang, text, flag) {

    const select = document.querySelector('.goog-te-combo');

    if (select) {

        select.value = lang;
        select.dispatchEvent(new Event('change'));

        // Update UI
        document.getElementById('selectedLanguage').innerText = text;
        document.getElementById('selectedFlag').src = flag;

        // RTL Arabic
        if (lang === 'ar') {

            document.body.classList.add('rtl');

            document.documentElement.setAttribute('dir', 'rtl');

            document.documentElement.setAttribute('lang', 'ar');

        } else {

            document.body.classList.remove('rtl');

            document.documentElement.setAttribute('dir', 'ltr');

            document.documentElement.setAttribute('lang', lang);

        }

    }

    dropdown.classList.remove('active');

}
setInterval(() => {

    const banner = document.querySelector(".goog-te-banner-frame");

    if (banner) {
        banner.style.display = "none";
    }

    document.body.style.top = "0px";

}, 100);

// Mega Menu Toggle
document.querySelectorAll('.dropdown-mega').forEach(mega => {
    const link = mega.querySelector('.nav-link');
    const menu = mega.querySelector('.mega-menu');

    if (link) {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            // Close other open menus
            document.querySelectorAll('.dropdown-mega.active').forEach(item => {
                if (item !== mega) {
                    item.classList.remove('active');
                }
            });

            // Toggle current menu
            mega.classList.toggle('active');
        });
    }
});

// Close mega menu when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown-mega')) {
        document.querySelectorAll('.dropdown-mega.active').forEach(mega => {
            mega.classList.remove('active');
        });
    }
});

// World Map Markers Interaction
document.addEventListener('DOMContentLoaded', function () {
    const markers = document.querySelectorAll('.marker');
    const tooltip = document.getElementById('mapTooltip');
    const mapContainer = document.querySelector('.map-container');

    if (markers.length > 0 && tooltip && mapContainer) {
        markers.forEach(marker => {
            const country = marker.getAttribute('data-country');
            const info = marker.getAttribute('data-info');

            // Get marker circle position
            const markerCircle = marker.querySelector('circle.marker-point');

            marker.addEventListener('mouseenter', function (e) {
                if (tooltip && country && info) {
                    // Update tooltip content
                    document.getElementById('tooltipTitle').textContent = country;
                    document.getElementById('tooltipInfo').textContent = info;

                    // Show tooltip
                    tooltip.classList.add('active');

                    // Position tooltip near marker
                    const rect = mapContainer.getBoundingClientRect();
                    const markerRect = marker.getBoundingClientRect();

                    const offsetX = markerRect.left - rect.left + 20;
                    const offsetY = markerRect.top - rect.top - 80;

                    tooltip.style.left = offsetX + 'px';
                    tooltip.style.top = offsetY + 'px';

                    // Add hover class to marker
                    marker.classList.add('hovered');
                }
            });

            marker.addEventListener('mouseleave', function () {
                if (tooltip) {
                    tooltip.classList.remove('active');
                    marker.classList.remove('hovered');
                }
            });
        });

        // Close tooltip when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.marker') && !e.target.closest('.map-tooltip')) {
                tooltip.classList.remove('active');
                markers.forEach(m => m.classList.remove('hovered'));
            }
        });
    }
});

document.querySelectorAll('.innovation-card').forEach(card => {
    card.addEventListener('mouseover', () => {
        card.classList.add('featured');
    });

    card.addEventListener('mouseout', () => {
        card.classList.remove('featured');
    });

});

// Scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
});

// Counter animation
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number[data-count]');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + (target === 100 ? '%' : target === 24 ? '/7' : '+');
            }
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    counterObserver.unobserve(counter);
                }
            });
        });
        counterObserver.observe(counter);
    });
}
animateCounters();

// Tab switching
function switchTab(tab, panelId) {
    document.querySelectorAll('.solution-tab').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    document.querySelectorAll('.solution-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('panel-' + panelId).classList.add('active');
}

// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Active nav link on scroll
const sections = document.querySelectorAll('section[id]');
window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });
    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});

/* Generate particles
function createParticles() {
    const container = document.getElementById('particles');
    for (let i = 0; i < 30; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 6 + 's';
        particle.style.animationDuration = (4 + Math.random() * 4) + 's';
        particle.style.width = (2 + Math.random() * 4) + 'px';
        particle.style.height = particle.style.width;
        particle.style.opacity = 0.1 + Math.random() * 0.3;
        container.appendChild(particle);
    }
}
createParticles();*/

// Scroll to Top Button Functionality
const scrollToTopBtn = document.getElementById('scroll-to-top-btn');

window.addEventListener('scroll', () => {
    // Show button when page is scrolled down
    if (window.scrollY > 300) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

// Click handler to scroll to top
scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Smart Header - Hide when scrolling down, Show when scrolling up
const navbar = document.querySelector('.navbar');
let lastScrollY = 0;
let isHeaderVisible = true;

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;

    // Always show header at the top
    if (currentScrollY < 50) {
        navbar.style.transform = 'translateY(0)';
        isHeaderVisible = true;
    } else if (currentScrollY > lastScrollY) {
        // Scrolling down - hide header
        navbar.style.transform = 'translateY(-100%)';
        isHeaderVisible = false;
    } else {
        // Scrolling up - show header
        navbar.style.transform = 'translateY(0)';
        isHeaderVisible = true;
    }

    lastScrollY = currentScrollY;
});

// Add transition to navbar
navbar.style.transition = 'transform 0.3s ease-in-out';

// Contact Form Handler
const contactForm = document.getElementById('contactForm');
const messageAlert = document.getElementById('messageAlert');
const submitBtn = document.getElementById('submitBtn');

if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Disable submit button
        submitBtn.disabled = true;
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';

        // Get form data
        const formData = new FormData(contactForm);

        try {
            // Send AJAX request
            const response = await fetch('/php/contatct.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            // Clear previous message
            messageAlert.classList.remove('alert-success', 'alert-danger');
            messageAlert.classList.add('d-none');

            if (data.success) {
                // Show success message
                messageAlert.textContent = data.message || 'Message sent successfully!';
                messageAlert.classList.add('alert-success');
                messageAlert.classList.remove('d-none');

                // Reset form
                contactForm.reset();

                // Hide message after 5 seconds
                setTimeout(() => {
                    messageAlert.classList.add('d-none');
                }, 5000);
            } else {
                // Show error message
                messageAlert.textContent = data.error || 'Failed to send message. Please try again.';
                messageAlert.classList.add('alert-danger');
                messageAlert.classList.remove('d-none');
            }
        } catch (error) {
            // Show network error
            messageAlert.textContent = 'Network error. Please check your connection.';
            messageAlert.classList.add('alert-danger');
            messageAlert.classList.remove('d-none');
            console.error('Error:', error);
        } finally {
            // Re-enable submit button
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });
}

// mapping for all product pages
const productsData =
{
    "products": [
        {
            "id": 1,
            "name": "Centerm K10",
            "description": "The latest innovation in mobile technology.",
            "price": 999.99,
            "image": "images/CentermK10.png",
            "OS": "Android 13",
            "Memory": "2GB RAM +16GB ROM ( 32GB & 64GB Optionel )",
            "display": "6.5-Inch IPS TouchScreen 1600*720 resolution Multiple-pointTouchscreen",
            "processor": " High performance CPU, quad core 2.0GHz",
            "Camera": " 2MP Front Camera & 5MP Rear Camera With A Flashlamp Scanner (Optional)"
        },
        {
            "id": 2,
            "name": "Centerm K9",
            "description": "A powerful device for all your needs.",
            "price": 799.99,
            "image": "images/CentermK9.png",
            "OS": "Android 8.1/10.1",
            "Memory": "8GB ROM+1GB RAM 16GB ROM + 2GB RAM (Optional)",
            "display": "5.5-Inch IPS TouchScreen 1280*720 resolution Multiple-pointTouchscreen",
            "processor": "High-performance Processor",
            "Camera": "2MP Front Camera & 5MP Rear Camera With A Flashlamp Scanner (Optional)"
        },
        {
            "id": 3,
            "name": "PAX A920Pro",
            "description": "A powerful device for all your needs.",
            "price": 799.99,
            "image": "images/PAXA920Pro.png",
            "OS": "Android 8.1/10.1",
            "Memory": " 8GB eMMC Flash + 1GB DDR RAM (16GB + 2GB DDR RAM Optional) Extended microSD Card Slot Up to 128GB (Optional)",
            "display": "5.5 Inch IPS HD+ 720 x 1440 Pixels Multi-Point zCapacitive Touch Screen",
            "processor": " ARM Cortex A53 Quad-Core, 1.4GHz + Secure Processor",
            "Camera": " 5MP Front-Facing Camera + 8MP Rear- Facing Camera + Top-Side Barcode Scanner ( Higher Quality Barcode Scanner Optional)"
        },
        {
            "id": 4,
            "name": "PAX A920",
            "description": "A powerful device for all your needs.",
            "price": 799.99,
            "image": "images/PAxA920.png",
            "OS": "Android 5.1",
            "Memory": " 1GB DDR3 SDRAM, 8GB EMMC",
            "display": " 5.0 inch 720 x 1280 pixels capacitive touch screen, white LED backlights, Signal Strength, Bluetooth Connectivity, Battery Status",
            "processor": "ARM Cortex A7 1.1GHz 4 Core Processor ",
            "Camera": "5 Megapixel Auto Zoom Camera 0.3 Megapixel Fixed Front Camera 1D / 2D code scanning",
            
        }
    ]
}

function renderProductCards(filterText = '') {
    const productShowcase = document.querySelector('#products');
    if (!productShowcase) return;

    // Filter products by name
    const filteredProducts = productsData.products.filter((product) =>
        product.name.toLowerCase().includes(filterText.toLowerCase())
    );

    // Show message if no products match
    if (filteredProducts.length === 0) {
        productShowcase.innerHTML = `<div class="container"><div class="row"><div class="col-12 text-center py-5"><p class="text-muted">No products found matching "${filterText}"</p></div></div></div>`;
        return;
    }

    const cardsHtml = filteredProducts.map((product) => {
        return `
            <div class="col-12  mb-1">
                <div class="card h-100 shadow-sm border-0">
                    <div class="row align-items-center justify-content-center g-0">
                        <div class="col-md-3">
                            <img src="${product.image}" class="img-fluid h-75" alt="${product.name}">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text text-muted">${product.description}</p>
                                <ul class="list-unstyled mb-3 small">
                                    <li><strong>OS:</strong> ${product.OS}</li>
                                    <li><strong>Memory:</strong> ${product.Memory}</li>
                                    <li><strong>Display:</strong> ${product.display}</li>
                                    <li><strong>Processor:</strong> ${product.processor}</li>
                                    <li><strong>Camera:</strong> ${product.Camera}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="3d.html" class="btn mt-auto rounded-pill w-75" style="background-color: #166666; color: white;">Order</a>
                        </div>
                    </div>
                </div>    
            </div>
        `;
    }).join('');

    productShowcase.innerHTML = `<div class="container"><div class="row g-4">${cardsHtml}</div></div>`;
}

document.addEventListener('DOMContentLoaded', function() {
    renderProductCards();
    
    // Set up search input listener
    const searchInput = document.querySelector('input[placeholder="Search for a product..."]');
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            renderProductCards(e.target.value);
        });
    }
});

document.getElementById("siscontact").onclick = function () {
    window.location.href ="index.html";
};

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('multiStepForm');
            if (!form) return;

            const steps = Array.from(form.querySelectorAll('.form-step'));
            const nextButtons = Array.from(form.querySelectorAll('.btn-next'));
            const prevButtons = Array.from(form.querySelectorAll('.btn-prev'));
            const progressItems = Array.from(document.querySelectorAll('.step-indicator li'));
            let currentStep = 0;

            function showStep(index) {
                steps.forEach((step, stepIndex) => {
                    step.classList.toggle('active', stepIndex === index);
                });
                progressItems.forEach((item, itemIndex) => {
                    item.classList.toggle('active', itemIndex <= index);
                });
            }

            function validateStep(index) {
                const inputs = Array.from(steps[index].querySelectorAll('input, textarea'));
                return inputs.every(input => input.reportValidity());
            }

            nextButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    if (!validateStep(currentStep)) {
                        return;
                    }

                    if (currentStep < steps.length - 1) {
                        currentStep += 1;
                        showStep(currentStep);
                    } else {
                        form.submit();
                    }
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    if (currentStep > 0) {
                        currentStep -= 1;
                        showStep(currentStep);
                    }
                });
            });

            showStep(currentStep);
        });