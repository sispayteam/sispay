@extends('master');
@section('content')
   <!-- hero section -->
    <section class="hero-section3 container-fluid">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-12">
                    <div class="badge mb-3" style="width: fit-content; background-color: #1F64AD; color: #fff;">BUSINESS
                        UNITS</div>
                    <h1 class="display-3">Towards Intelligent and <span
                            style="color: #1F64AD; font-weight: bolder;">Omnichannel</span>
                        Kiosks
                    </h1>
                    <p class="">
                        A more fluid bank, more autonomous customers, and optimized profitabilit</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary btn-lg rounded-pill me-3">Partner With Us</a>
                        <a href="#" class="btn btn-secondary btn-lg rounded-pill">Our Solutions</a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-12 d-none d-md-block">
                    <img src="{{ asset('assets/images/bankhero.png') }}" class="w-100" alt="hero " />

                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <section class="container-fluid my-5">
        <div class="container">
            <div class="d-flex flex-column align-items-start text-start gap-1">
                <h2 style="color: #1F64AD; font-weight: bold;">Our Solutions: <br>Self-Service Kiosks</h2>
                <p style="color: #424751;">Unlike the rigid systems offered by competitors like IPRC (HPS),<br> Thales,
                    or ACI, our core services prioritize agility and rapid integratio</p>
            </div>
        </div>
        <div class="container-fluid align-items-center align-content-center">
            <div class="col-md-12 position-relative align-items-center align-content-center ">

                <div class="col-md-5 text-start position-absolute py-auto end-0 me-5">
                    <h1 class="mt-5" style="font-size: 1.6rem; color: black; text-align: left; ">
                        Core Services (Phygital Kiosks)
                    </h1>
                    <p class="my-3" style="color: black; font-size: 0.9rem; text-align: left;">
                        For Banks: Extend coverage to rural or underserved areas and manage essential operations:
                        account opening, deposits, withdrawals, and transfers.<br>
                    </p>
                    <p style="color: black; font-size: 0.9rem; text-align: left;">For Insurers: Enable rapid
                        subscription (travel, civil liability), simplified premium payments,
                        and minor claim reporting.
                    </p>
                    <a href="#" class="btn btn-lg rounded-pill mb-5 my-4"
                        style="background-color: #1F64AD; border-color: #1F64AD; color: white;">e-Brochure</a>
                </div>
                <img src="{{ asset('assets/images/mybank.png') }}" class="w-100" alt="" srcset="">
            </div>


        </div>
    </section>
    <section class="container-fluid py-5">
        <div class="row ">
            <div class="col-md-8 col-sm-12">
                <div class="card bg-light text-dark">
                    <i class="fa-solid fa-head-side-virus p-3" style="font-size: 1.8rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Financial Services Kiosks</h5>
                        <p class="card-text mt-3">
                            Start a transaction on your phone, finish it at the kiosk. A seamless
                            transition that preserves state and context across the digital-physical divide.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card text-light" style="background-color: #1F64AD;">
                    <i class="fa-solid fa-video p-3" style="font-size: 1.8rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title">ITM Integration</h5>
                        <p class="card-text mt-3">
                            Interactive Teller Machines bringing the
                            human touch to remote locations via
                            high-definition video conferencing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card bg-light text-dark">
                    <i class="fa-solid fa-tower-cell p-3" style="font-size: 1.8rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Mobile to Kiosk</h5>
                        <p class="card-text mt-3">
                            Start a transaction on your phone, finish it at the kiosk. A seamless
                            transition that preserves state and context across the digital-physical divide.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-light text-dark">
                    <i class="fa-solid fa-satellite-dish p-2" style="font-size: 1.8rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Advanced Tech & IoT</h5>
                        <p class="card-text mt-3">
                            Sensor-driven maintenance and predictive hardware health
                            monitoring. Kiosks that alert technicians before a fault even occurs.
                        </p>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <section class="container-fluid pt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item rounded active">
                    <div class="col-md-12 position-relative">
                    <img src="{{ asset('assets/images/bg3.png') }}" class="w-100 rounded-3" alt="" srcset="">
                    <div class="col-md-4 text-start position-absolute top-0 start-0 p-3">
                        <h1 style="font-size: 1.6rem; color: #1F64AD; text-align: left;">
                            The Precision of Phygital Maintenance
                        </h1>
                        <p style="font-size: 0.9rem; text-align: left;">
                           Our kiosks are designed for 99.9% uptime. Through modular
                            hardware and remote IoT diagnostics, we ensure the future
                            of banking is never "Out of Service."
                        </p>
                        <a href="#" class="btn btn-lg rounded-pill mb-5"
                            style="background-color: #1F64AD; border-color: #1F64AD; color: white;">Technical Specs</a>
                    </div>
                </div>
                </div>
                <div class="carousel-item rounded">
                    <img src="{{ asset('assets/images/plan.png') }}" class="d-block w-100 rounded-3" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center">
                    <h1 style="font-size: 2.5rem; color: #1F64AD;font-weight: bold;">45%</h1>
                    <p>Efficiency Increase</p>
                </div>
                 <div class="col-md-4 col-sm-6 text-center">
                    <h1 style="font-size: 2.5rem; color: #1F64AD;font-weight: bold;">24/7</h1>
                    <p>Global Support</p>
                </div>
                 <div class="col-md-4 col-sm-12 text-center">
                    <h1 style="font-size: 2.5rem; color: #1F64AD;font-weight: bold;">0.2S</h1>
                    <p>Response Latency</p>
                </div>
            </div>
        </div>
    </section>
@endsection