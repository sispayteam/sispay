@extends('master');
@section('content')
    <!-- hero section -->
    <section class="hero-section2 container-fluid">
        <div class="container-fluid">
            <div class="row align-items-center align-content-center">
                <div class="col-md-6 col-sm-12 text-light">
                    <div class="badge my-5" style="width: fit-content; background-color: #CDE1AA; color: #fff;">BUSINESS
                        UNITS</div>
                    <h1 class="display">Secure your transactions,<span
                            style="color: #CDE1AA; font-weight: bolder;">Strengthen your resilience</span>
                        Kiosks
                    </h1>
                    <p class="">
                        A more fluid bank, more autonomous customers, and optimized profitabilit</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-lg rounded-pill me-3" style="background-color: #CDE1AA; border-color: #CDE1AA; color: white;">Partner With Us</a>
                        <a href="#" class="btn btn-secondary btn-lg rounded-pill">Our Solutions</a>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12 d-none d-md-block">

                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <section class="container">
        <div class="container">
            <div class="d-flex flex-column align-items-start text-start gap-1 w-50 my-5">
                <h2 style="color: #43395C; font-weight: bold;">Our Service Pillars</h2>
                <p style="color: #424751;">Unlike the rigid systems offered by competitors like IPRC (HPS), Thales, 
                    or ACI, our core services prioritize agility and rapid integration.
                </p>
            </div>
            <div class="py-3">
                <img src="{{ asset('assets/images/img-1.png') }}" class="w-100 rounded-3" alt="" srcset="">
                <img src="{{ asset('assets/images/img-2.png') }}" class="w-100 rounded-3" alt="" srcset="">
                <img src="{{ asset('assets/images/img-3.png') }}" class="w-100 rounded-3" alt="" srcset="">
                <img src="{{ asset('assets/images/img-4.png') }}" class="w-100 rounded-3" alt="" srcset="">
            </div>
        </div>
    </section>
        <section class="container!fluid py-5" style="background-color: #E6E6E6">
            
            <img src="{{ asset('assets/images/btd.png') }}" class="w-100 p-3" alt="" srcset="">
        </section>
@endsection