@extends('master');
@section('content')
    <!-- hero section -->
    <section class="container-fluid py-3">
        <div class="row">
            <div class="d-flex align-items-center ">
                <div class="col-md-5 col-sx-12 ms-5">
                    <div class="badge mb-3" style="width: fit-content; background-color: #7FABAB; color: white;">
                        BUSINESS UNITS</div><br>
                    <img src="{{ asset('assets/images/logo1-c.png') }}" height="40PX" alt="" srcset="">
                    <h1 style="font-size: 3.5rem;font-weight: bold; color: #8D8E8E;">Empowering Global
                        <span style="color: #156565; font-weight: bolder;">ePayment Solutions</span>

                    </h1>
                    <p class="">
                        SisPay is a global leader in payment technology, providing seamless, secure, and innovative
                        terminal solutions designed for the modern economy.</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-lg rounded-pill me-3"
                            style="background-color: #156565; border-color: #156565; color: white;">Partner With Us</a>
                        <a href="#" class="btn btn-secondary btn-lg rounded-pill">Order Now</a>
                    </div>
                </div>
                <div class="col-md-7 col-sx-12">
                    <img src="{{ asset('assets/images/hero-epayment.png') }}" class="w-100 animate__animated animate__fadeInRight" alt=""
                        srcset="">
                </div>
            </div>
        </div>

    </section>
    <!-- end hero section -->
    <section class="container-fluid my-5">
        <div class="container">
            <div class="d-flex flex-column align-items-start text-start gap-1">
                <h2 style="color: #156565; font-weight: bold;">Our Core Hardware</h2>
                <p style="color: #424751; max-width: 300px;">Purpose-built devices engineered for performance,
                    reliability, and versatility — ready for any business environment.</p>
            </div>
        </div>
        <div class="container-fluid d-none d-sm-block">
            <div class="row py-1">

                <div class="col-md-12 position-relative">
                    <img src="{{ asset('assets/images/terminal.png') }}" class="w-100" alt="" srcset="">
                    <div class="col-md-5 text-end position-absolute top-0 start-1">
                        <h1 style="font-size: 1.6rem; color: white; text-align: right; margin-top: 100px;">
                            CENTERM<br> K10
                        </h1>
                        <p style="color: white; font-size: 0.9rem; text-align: right;">
                            K10 is a new generation of all-in-one Android POS. It covers all card payments with powerful
                            code scanning capability to meet the needs of different industries.
                        </p>
                        <a href="#" class="btn btn-lg rounded-pill mb-5"
                            style="background-color: #156565; border-color: #156565; color: white;">Partner With Us</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container!fluid d-block d-sm-none">
            <div class="row p-1">
                <div class="col-md-12">
                    <div class="col-md-5 text-start py-2">
                        <h1 style="font-size: 2.5rem; color: black; text-align: left; margin-top: 100px;">
                            CENTERM<br> K10
                        </h1>
                        <p style="color: black; font-size: 0.9rem; text-align: left;">
                            K10 is a new generation of all-in-one Android POS. It covers all card payments with powerful
                            code scanning capability to meet the needs of different industries.
                        </p>
                        <a href="#" class="btn btn-lg rounded-pill mb-4"
                            style="background-color: #156565; border-color: #156565; color: white;">Partner With Us</a>
                    </div>

                </div>
            </div>
    </section>
    <section class="container-fluid my-5">
        <div class="row px-5 align-items-center">
            <div class="col-md-5 py-5">
                <h2 style="color: #156565; font-weight: bold;">Centerm K10</h2>
                <p style="color: #424751; font-size: 0.9rem;">
                    6.5-inch IPS Touchscreen<br>
                    1600 / 720 Resolution<br>
                    Android 13 OS <br>
                    Optimized for retail, catering & banking<br>
                    Powerful scanning capabilities<br>
                </p>
                <div class="d-flex gap-3 justify-content-ceenter text-center">
                    <div class="py-2">
                        <img src="{{ asset('assets/images/nfc.png') }}" height="70px" alt="" srcset="">
                        <p>NFC</p>
                    </div>
                    <div class="py-2">
                        <img src="{{ asset('assets/images/print.png') }}" height="70px" alt="" srcset="">
                        <p>Receipt<br> Printing</p>
                    </div>
                    <div class="py-2">
                        <img src="{{ asset('assets/images/note.png') }}" height="70px" alt="" srcset="">
                        <p>Ordering</p>
                    </div>
                    <div class="py-2">
                        <img src="{{ asset('assets/images/qr.png') }}" height="70px" alt="" srcset="">
                        <p>QR Code</p>
                    </div>
                </div>
                <a href="#" class="btn btn-lg rounded-pill my-4" style="background-color: #156565; border-color: #156565; color: white;">
                    Order Now
                </a>

            </div>
            <div class="col-md-7">
                <img src="{{ asset('assets/images/img2-t.png') }}" class="w-100 animate__animated animate__fadeInRight" alt="" srcset="">
            </div>

        </div>
    </section>
    <section class="terminal">
        <div class="container">
            <div class="d-flex flex-column align-items-start  gap-1">
                <h2 style="color: #156565; font-weight: bold;">Integrated Payment Ecosystem</h2>
                <p style="color: #424751; max-width: 300px;">
                    These tools transform the point of sale into an
                    experience center. SisPay offers powerful software
                    solutions integrated directly into the terminal:
                </p>
            </div>
            <div class="container">
                <div class="row py-5 text-center">
                    <div class="col-md-3">
                        <div class="card" style="background-color: transparent; border: none;">
                            <img src="{{ asset('assets/images/icon-v1.png') }}" class="card-img-top w-25 m-auto" alt="...">
                            <div class="card-body p-5" style="background-color: #FFFFFF; border-radius: 10px;">
                                <h4>SoftPOS</h4>
                                <p class="card-text">Transform a smartphone or tablet into a certified payment
                                    terminal.<br></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="background-color: transparent;">
                            <img src="{{ asset('assets/images/iconv-2.png') }}" class="card-img-top w-25 m-auto" alt="...">
                            <div class="card-body p-5" style="background-color: #FFFFFF; border-radius: 10px;">
                                <h4>POS Application</h4>
                                <p class="card-text mb-1">Manage sales, inventory, and collections in a single connected
                                    tool. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="background-color: transparent;">
                            <img src="{{ asset('assets/images/iconv3.png') }}" class="card-img-top w-25 m-auto" alt="...">
                            <div class="card-body p-5" style="background-color: #FFFFFF; border-radius: 10px;">
                                <h4>eVoucher & Coupons</h4>
                                <p class="card-text mb-1">Digitize gift cards and promo codes. Distribute, track, and
                                    analyze performance.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card" style="background-color: transparent;">
                            <img src="{{ asset('assets/images/iconv4.png') }}" class="card-img-top w-25 m-auto" alt="...">
                            <div class="card-body p-5" style="background-color: #FFFFFF; border-radius: 10px;">
                                <h4>Embedded Loyalty</h4>
                                <p class="card-text">Create frictionless loyalty journeys: points, cashback, and
                                    personalized coupons.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex flex-column align-items-start  gap-1">
                <h2 style="color: #156565; font-weight: bold;">Built for Every Industry</h2>
                <p style="color: #424751; max-width: 300px;">
                    These tools transform the point of sale into an
                    experience center. SisPay offers powerful software
                    solutions integrated directly into the terminal:
                </p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row align-items-center ">

                <div class="col-md-6 col-sm-12 text-end">
                    <h2 style="color: #156565; font-weight: bold;">Bank</h2>
                    <p style="color: #424751; max-width: 300px; text-align: end; float: right;">
                        Built-in operational capabilities including receipt printing, ticket validation and checking,
                        and advanced document scanning
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/images/bank.png') }}" class="w-100 animate__animated animate__fadeInRight" alt="" srcset="">

                </div>
            </div>

            <div class="row align-items-center ">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/images/retail.png') }}" class="w-100 animate__animated animate__fadeInleft" alt="" srcset="">

                </div>
                <div class="col-md-6 col-sm-12 text-start">
                    <h2 style="color: #156565; font-weight: bold;">Retail</h2>
                    <p style="color: #424751; max-width: 300px; text-align: left; float: left;">
                        Specialized payment modes for catering businesses with table-side payments
                    </p>
                </div>

            </div>

            <div class="row align-items-center ">

                <div class="col-md-6 col-sm-12 text-end">
                    <h2 style="color: #156565; font-weight: bold;">HOTEL</h2>
                    <p style="color: #424751; max-width: 300px; text-align: end; float: right;">
                        Sleek & Compact Design Total Versatility
                        HD Touchscreen
                        Unlimited MobilitySleek & Compact Design
                        Total Versatility
                        HD Touchscreen
                        Unlimited Mobility
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/images/hotel.png') }}" class="w-100 animate__animated animate__fadeInRight" alt="" srcset="">

                </div>
            </div>

            <div class="row align-items-center ">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('assets/images/katrin.png') }}" class="w-100 animate__animated animate__fadeInleft" alt="" srcset="">

                </div>
                <div class="col-md-6 col-sm-12 text-start">
                    <h2 style="color: #156565; font-weight: bold;">CATERIN</h2>
                    <p style="color: #424751; max-width: 300px; text-align: left; float: left;">
                        Integrated order-taking Seamless table-side payment Ultra-fast thermal printer Durability &
                        Battery Life
                    </p>
                </div>

            </div>
        </div>

    </section>

@endsection