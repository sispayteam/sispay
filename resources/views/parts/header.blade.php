    <!-- Hidden Google Translate -->
    <div id="google_translate_element"></div>
    <!--  Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo-dark.png') }}" width="120px" alt="Sispay Group"
                    srcset=""></a>
            <!-- Mobile Language Selector -->
            <div class="language-mobile-flags" id="languageMobileFlags">
                <img src="https://flagcdn.com/w40/fr.png" class="flag-icon"
                    onclick="changeLanguage('fr','Français','https://flagcdn.com/w40/fr.png')" title="Français">
                <img src="https://flagcdn.com/w40/us.png" class="flag-icon"
                    onclick="changeLanguage('en','English','https://flagcdn.com/w40/us.png')" title="English">
                <img src="https://flagcdn.com/w40/ma.png" class="flag-icon"
                    onclick="changeLanguage('ar','العربية','https://flagcdn.com/w40/ma.png')" title="العربية">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#solutions">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Our team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">News</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="recrutement.html">careers</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Get Started</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center" role="search">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Business Units
                        </button>
                        <ul class="dropdown-menu text-light" aria-labelledby="dropdownMenuButton1" style="background-color: transparent!important; border: none;">
                            <li style="background-color: #156565; font-weight: bold; text-align: center; border-radius: 5px;" class="my-2 p-3">
                               <div class="d-flex align-items-center"><a href="e-pay-produit.html"><i class="fa-solid text-light fa-magnifying-glass"></i></a>
                               <img src="{{ asset('assets/images/logo1.png') }}" class="m-auto" height="40PX" alt="" srcset=""> </div> 
                                <a class="dropdown-item rounded-pill bg-light text-dark my-2" href="{{ route('epayment') }}">E-payment & hardware</a>
                            </li>
                            <li style="background-color: #43395C; font-weight: bold; text-align: center; border-radius: 5px;" class="my-2 p-3">
                                <img src="{{ asset('assets/images/logo2.png') }}" class="m-auto" height="40PX" alt="" srcset="">
                                <a class="dropdown-item rounded-pill bg-light text-dark my-2" href="{{ route('managed') }}">Managed Services (Froud & talent)</a>
                            </li>
                            <li style="background-color: #1F64AD; font-weight: bold; text-align: center; border-radius: 5px;" class="my-2 p-3">
                                <img src="{{ asset('assets/images/logo3.png') }}" class="m-auto" height="40PX" alt="" srcset="">
                                <a class="dropdown-item rounded-pill bg-light text-dark my-2" href="{{ route('bank') }}">Financial Services Koisks</a>
                            </li>
                        </ul>
                        </div>
                    
                    <!-- Language Dropdown -->
                    <div class="language-dropdown" id="languageDropdown">
                        <div class="language-btn">
                            <i id="selectedFlag" class="fa-solid fa-globe flag"></i> 
                            <span id="selectedLanguage">
                                language
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <!-- Menu -->
                        <div class="language-menu">
                            <div class="language-item"
                                onclick="changeLanguage('fr','Français','https://flagcdn.com/w40/fr.png')">
                                <img src="https://flagcdn.com/w40/fr.png" class="flag">
                                Français
                            </div>
                            <div class="language-item"
                                onclick="changeLanguage('en','English','https://flagcdn.com/w40/us.png')">
                                <img src="https://flagcdn.com/w40/us.png" class="flag">
                                English
                            </div>
                            <div class="language-item"
                                onclick="changeLanguage('ar','العربية','https://flagcdn.com/w40/ma.png')">
                                <img src="https://flagcdn.com/w40/ma.png" class="flag">
                                العربية
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>