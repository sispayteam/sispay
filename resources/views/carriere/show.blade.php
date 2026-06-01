@extends('master')

@section('content')

<!-- ====== blog-page1-area-start=========================================== -->
<div class="blog-page1-area blog-gallery-page blog-page mt-60 mb-120">
    <div class="container">
            @if($offer->image)
               <img class="w-100 mb-4 imageofr" src="{{ Voyager::image($offer->image) }}" alt="{{ $offer->title }}" />
            @endif
        <div class="row">
            <div class="col-md-8  col-sm-8">
                <div class="blog-page1-content-wrapper">
                    <div class="blog-page1-content mt-45 mb-45">

                        {!! $offer->body !!}
                    </div><!-- /blog-page1-content -->
                </div><!-- /blog-page1-content-wrapper -->
            </div><!-- /row -->
            <div class="col-md-4  col-sm-4">
                <div class="card p-3">
                    <h5 class="card-title">Postuler</h5>
                    <form id="contactForm" method="post" action="{{ route('send.application') }}" enctype="multipart/form-data">
                       @csrf
                      <input type="hidden" name="slug" value="{{ $offer->title }}">
                        <div class="mb-3">
                            <label for="nom-1" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" name="name" placeholder="Nom complet" required>
                        </div>
                        <div class="mb-3">
                            <label for="email-1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="email-1" class="form-label">Telephone</label>
                            <input type="tel" class="form-control" name="message" placeholder="Telephone" required>
                        </div>
                        <div class="mb-3">
                            <label for="cv-1" class="form-label">Télécharger votre CV</label>
                            <input type="file" class="form-control" name="cv" accept=".pdf,.docx,.doc">
                        </div>
                       <div class="g-recaptcha my-4" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        <button type="submit" class="btn btn-primary">Soumettre ma candidature</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
