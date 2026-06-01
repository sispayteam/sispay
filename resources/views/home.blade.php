@extends('master');
@section('content')
    <!-- hero section -->
    <section class="hero-section container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sx-12">
                    <div class="badge bg-primary mb-3" style="width: fit-content;">Founded in 2011 • Morocco</div>
                    <h1 class="display-3">Empowering Global
                        <span style="color: #2690cf; font-weight: bolder;">Financial Innovation</span>

                    </h1>
                    <p class="">
                        As your partner in digital transformation, SisPay connects banking,
                        retail, and energy through agile, integrated payment solutions, fraud
                        management, and mobile ERP. We transform your business into an
                        intelligent and profitable hub.</p>
                    <div class="d-flex">
                        <a href="#" id="siscontact"  class="btn btn-primary btn-lg rounded-pill me-3">Partner With Us</a>
                        <a href="#" id="siscontact" class="btn btn-secondary btn-lg rounded-pill">Our Solutions</a>
                    </div>

                </div>
                <div class="col-md-6 col-sx-12 d-none d-md-block">
                    <img src="{{ asset('assets/images/gif.gif') }}" class=" w-100 gif " alt="hero " />
                  <img src="{{ asset('assets/images/hero.png') }}" class="w-100" alt="hero " />

                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->
    <!--   speciqlized-->
    <section id="solutions" class="specialized-section container my-5 py-5">
        <div class="align-items-center">
            <div class="col-md-12 col-sx-12 text-center">
                <h3 class="display-8" style="color:#2690cf">Our Specialized Ecosystem</h3>
                <p class="mb-4">
                    SisPay operates through 3 strategic business units, delivering
                    comprehensive technology solutions for complex industries.
                </p>
            </div>
            <div class="container mt-3">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/sld-2.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/sld-1.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/sld-3.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- end speciqlized -->
    <!-- BLOG -->
    <section id="blog" class="blog-section container-fluid my-5 py-5">
        <div class="align-items-center">
            <div class="col-md-12 col-sx-12 text-center">
                <h3 class="display-8 mb-5" style="color:#2690cf">News & Insights</h3>
            </div>
            <div class="col-md-12">
                <div class="multi-carousel-container" id="multiCarousel">
                    <div class="multi-carousel-inner" id="carouselInner">
                        <!-- Original items only -->
                        <div class="multi-carousel-item" data-index="0">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 1">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="1">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 2">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="2">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 3">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="3">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 4">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="4">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 5">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="5">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 6">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="6">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 7">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="7">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 8">
                            </div>
                        </div>
                        <div class="multi-carousel-item" data-index="8">
                            <div class="img-container">
                                <img src="{{ asset('assets/images/BLOG.png') }}" alt="Image 9">
                            </div>
                        </div>
                    </div>

                    <button class="multi-carousel-control-prev" id="prevBtn">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="multi-carousel-control-next" id="nextBtn">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- end BLOG -->
    <!-- section info -->
    <section id="info" class="info-section container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="div1">
                    <h1 class="display" style="color: #2690cf;">Who We Are</h1>
                    <p style="color: #424751;">
                        Founded in 2011, SisPay is a pioneer and leader in the Fintech ecosystem, specializing in the
                        development and integration of advanced electronic payment software.
                        With over a decade of expertise, we serve as a strategic partner for the digital transformation
                        of
                        the Banking, Retail, and Energy sectors.
                    </p>
                       <h1 class="display" style="color: #2690cf;">Our Global Footprint</h1>
                    <p style="color: #424751;">
                        Headquartered in Morocco with a strong international outlook, SisPay manages billions of transactions annually.
                         Our solutions are trusted by more than 80 major clients across 36 countries, ranging from global 
                        retail giants like McDonald’s to energy leaders like TotalEnergies and major financial institutions such as Attijariwafa Bank.
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-sm-12 d-flex flex-wrap gap-3 justify-content-center text-center ">
                <div class="d-flex w-100 justify-content-center gap-3">
                    <div class="div2 p-2 animate__animated  animate__fadeInDown">
                        <img src="{{ asset('assets/images/icon1.png') }}" class="m-auto" height="80px" alt="" srcset="">
                        <h1 style="font-weight: bold;">+15</h1>
                        <p>Solution déployée en production</p>
                    </div>
                    <div class="div3 p-2 animate__animated  animate__fadeInDown">
                        <img src="{{ asset('assets/images/icon2.png') }}" class="m-auto" height="80px" alt="" srcset="">
                        <h1 style="font-weight: bold;">+100k</h1>
                        <p>De TPE équipés de nos solutions</p>
                    </div>
                </div>
                <div class="d-flex w-100 justify-content-center gap-3 ">
                           <div class="div5 p-2 animate__animated  animate__fadeInDown">
                        <img src="{{ asset('assets/images/icon4.png') }}" class="m-auto" height="80px" alt="" srcset="">
                        <h1 style="font-weight: bold;">+79</h1>
                        <p>Clients nous ont fait confiance</p>
                    </div>
                    <div class="div4 p-2 animate__animated  animate__fadeInDown">
                        <img src="{{ asset('assets/images/icon3.png') }}" class="m-auto" height="60px" alt="" srcset="">
                        <h1 style="font-weight: bold;">36</h1>
                        <p>Pays servis à partir du Maroc</p>
                    </div>
             
                </div>

            </div>
        </div>
    </section>
    <!-- end section info -->
    <!-- team section -->
    <section id="team" class="container">
        <div class="col-md-12 text-center mb-5">
            <h3 class="display-8" style="color:#2690cf">Meet our leadership</h3>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-6">
                <div class="card">
                    <img src="{{ asset('assets/images/karimzaitouni.png') }}" class="card-img-top" alt="Karim Zaitouni">
                    <div class="card-body">
                        <h6 class="card-title">Karim Zaitouni</h6>
                        <p class="card-text">Charman & Chief Executive Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="card">
                    <img src="{{ asset('assets/images/avatar.png') }}" class="card-img-top" alt="Abdellatif Boumhali">
                    <div class="card-body">
                        <h6 class="card-title">Abdellatif Boumhali</h6>
                        <p class="card-text">Sreach Diractor and Developmment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="card">
                    <img src="{{ asset('assets/images/mohammedfathi.png') }}" class="card-img-top" alt="Mohammed Fathi">
                    <div class="card-body">
                        <h6 class="card-title">Mohammed Fathi</h6>
                        <p class="card-text">Financial and Administrative Director</p>
                    </div>
                </div>
            </div>
              <div class="col-md-2 col-sm-6">
                <div class="card">
                    <img src="{{ asset('assets/images/zineb.png') }}" class="card-img-top" alt="Zainab">
                    <div class="card-body">
                        <h6 class="card-title">Zainab</h6>
                        <p class="card-text">Processes and Organisation Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="card">
                    <img src="{{ asset('assets/images/avatar.png') }}" class="card-img-top" alt="Mohamed El Haloui">
                    <div class="card-body">
                        <h6 class="card-title">Mohamed El Haloui</h6>
                        <p class="card-text">Delivery Director</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->
    <!--section caoussel client-->
    <section class="carousel-client container my-5 py-5">
        <div class="col-md-12 text-center mb-5">
            <h3 class="display-8">What Our Clients Say</h3>
        </div>
        <div class="col-md-12">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                data-bs-interval="false">
                <div class="carousel-inner w-100">
                    <div class="carousel-item active w-100">
                        <div class="d-flex gap-5 justify-content-center">
                            <img src="{{ asset('assets/images/client1.png') }}" class="card-img-top-c"  alt="" srcset="">
                            <img src="{{ asset('assets/images/client2.png') }}" class="card-img-top-c" alt="" srcset="">
                            <img src="{{ asset('assets/images/client3.png') }}" class="card-img-top-c " alt="" srcset="">
                            <img src="{{ asset('assets/images/client4.png') }}" class="card-img-top-c" alt="" srcset="">
                            <img src="{{ asset('assets/images/client10.png') }}" class="card-img-top-c" alt="" srcset="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex gap-5 justify-content-center">
                            <img src="{{ asset('assets/images/client5.png') }}" class="card-img-top-c" alt="" srcset="">
                            <img src="{{ asset('assets/images/client6.png') }}" class="card-img-top-c" alt="" srcset="">
                            <img src="{{ asset('assets/images/client7.png') }}" class="card-img-top-c" alt="" srcset="">
                            <img src="{{ asset('assets/images/client8.png') }}" class="card-img-top-c" alt="" srcset="">
                            <img src="{{ asset('assets/images/client9.png') }}" class="card-img-top-c" alt="" srcset="">
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!--end section caoussel client-->
    <!-- contact section    -->
    <section id="contact" class="container-fluid contact">
        <div class="container py-5 align-items-center align-content-center">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="mx-auto d-block" width="150px" alt="" srcset="">
            <div class="row align-items-center p-5">
                <div class="col-md-6 col-sm-12">
                    <!-- Alert Messages -->
                    <div id="messageAlert" class="alert d-none mb-3" role="alert"></div>
                    
                    <form class="form-c p-4 rounded" id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="8"
                                placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3" id="submitBtn">Send Message</button>
                    </form>

                </div>
                <div class="col-md-6 col-sm-12">
                    <h2 class="" style="color: #fff;">Contact Information</h2>
                    <h3 style="color: #fff;">
                        <i class="fas fa-envelope"></i> E-mail
                    </h3>
                    <p style="color: #fff;">info@sispay.net</p>
                    <h3 style="color: #fff;">
                        <i class="fas fa-phone"></i>Phone
                    </h3>
                    <p style="color: #fff;">+212 (0) 600 046 143 <br> +212 (0) 600 600 727</p>
                    <h3 style="color: #fff;">
                        <i class="fas fa-building"></i>Office
                    </h3>
                    <p style="color: #fff;">Immeuble Espace Jet Business Class, Lotissement Attaoufik 16-18, Casablanca
                        20150</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.4545852406527!2d-7.6460241240487425!3d33.54156354452256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62dae25595197%3A0xbb9978f41188621a!2sSisPay%20SA!5e0!3m2!1sfr!2sma!4v1779268401500!5m2!1sfr!2sma"
                        width="100%" height="190" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
@endsection