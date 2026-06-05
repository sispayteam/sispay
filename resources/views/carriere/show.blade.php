@extends('master')

@section('content')

    <!-- ====== blog-page1-area-start=========================================== -->
    <div class="blog-page1-area blog-gallery-page blog-page mt-60 mb-120" style="background-color: #E6E6E6;">
        <div class="container mt-4">
            @if($offer->image)
                <img class="w-100 mb-4 mt-4 imageofr" src="{{ Voyager::image($offer->image) }}" alt="{{ $offer->title }}" />
            @endif
            <div class="row">
                <div class="col-md-8 m-auto col-sm-12">
                    <div class="blog-page1-content-wrapper">
                        <div class="blog-page1-content mt-45 mb-45">

                            {!! $offer->body !!}
                        </div><!-- /blog-page1-content -->
                    </div><!-- /blog-page1-content-wrapper -->
                </div><!-- /row -->

            </div>
            <div class="row align-items-center my-5">
                <div class="col-md-4">
                    Find similar jobs:<br>
                    <a href="{{ route('carriere') }}" class="link" class="text-dark">Jobs in morrocoo</a>
                </div>
                <div class="col-md-4">
                    <ul class="list-group mb-4 bg-transparent">
                        <li class="list-group-item">Publication Date: {!! $offer->updated_at->format('d/m/Y') !!}</li>
                        <li class="list-group-item">Ref. No: {!! $offer->id !!}</li>
                        <li class="list-group-item">Location: Casablanca, Morocco</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="btn btn-primary float-end">
                        <a href="{{ route('carriere.postuler', $offer->slug) }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection