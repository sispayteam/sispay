@extends('master')

@section('content')
    <!-- ====== blog-page1-area-start=========================================== -->
    <div class="blog-page1-area blog-gallery-page blog-page mt-60 mb-120" style="background-color: #E6E6E6;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="blog-page1-content-wrapper">
                        <section class="container py-5">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card p-4">
                                        <h2 class="mb-3 text-center">Apply for this role</h2>
                                        <p class="text-muted text-center">Complete the three-step application below.</p>

                                        <ul class="step-indicator">
                                            <li class="active">Personal Info</li>
                                            <li>Experience</li>
                                            <li>Submit</li>
                                        </ul>
                                        <form id="multiStepForm" action="{{ route('send.application') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                             <input type="hidden" name="slug" value="{{ $offer->slug }}">

                                            @if(session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            @if($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul class="mb-0">
                                                        @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <fieldset class="form-step active">
                                                <div class="mb-3">
                                                    <label for="fullName" class="form-label">Full name</label>
                                                    <input type="text" id="fullName" name="fullName" value="{{ old('fullName') }}" class="form-control"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email address</label>
                                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone number</label>
                                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="resume" class="form-label">Resume</label>
                                                    <input type="file" id="resume" name="cv" class="form-control"
                                                        accept=".pdf,.doc,.docx" required>
                                                </div>
                                                <div class="d-flex justify-content-end mt-2">
                                                    <button type="button" class="btn btn-primary btn-next w-100">Continue</button>
                                                </div>
                                            </fieldset>

                                            <fieldset class="form-step">
                                                <div class="mb-3">
                                                    <label for="position" class="form-label">Question 1</label>
                                                    <input type="text" id="position" name="Question1" value="{{ old('Question1') }}" class="form-control"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="experience" class="form-label">Question 2</label>
                                                    <input type="text" id="experience" name="Question2" value="{{ old('Question2') }}" class="form-control"
                                                        min="0" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="experience" class="form-label">Question 3</label>
                                                    <input type="text" id="experience" name="Question3" value="{{ old('Question3') }}" class="form-control"
                                                        min="0" required>
                                                </div>
                                                <div class="d-flex justify-content-between gap-2">
                                                    <button type="button"  class="btn btn-secondary btn-prev w-50">Previous</button>
                                                    <button type="button" class="btn btn-primary btn-next w-50">Continue</button>
                                                </div>
                                            </fieldset>

                                            <fieldset class="form-step">
                                                <div class="mb-3">
                                                    <label for="message" class="form-label">Message</label>
                                                    <textarea id="message" name="message" class="form-control" rows="4"
                                                        placeholder="Tell us why you're a great fit" required>{{ old('message') }}</textarea>
                                                </div>
                                                <div class="d-flex justify-content-between gap-2">
                                                    <button type="button"
                                                        class="btn btn-secondary btn-prev w-50">Previous</button>
                                                    <button type="button" class="btn btn-primary btn-next w-50">Submit</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection