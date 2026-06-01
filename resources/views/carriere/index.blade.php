@extends('master')
@section('content')
    <section class="container py-5">
        <div class="row">
            <div class="d-flex m-auto justify-content-center align-items-center  position-relative w-50">
                <input type="text" class="form-control  my-4 rounded-3" placeholder="Recherche par intitulé de poste...">
                <div class="btn rounded-circle position-absolute top-2 end-0"
                    style="background-color: #2690cf; color: white;">
                    <i class="fa-solid fa-magnifying-glass" style="max-height: 38px; width: auto;"></i>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            @foreach($offer as $item)
                <div class="col-md-4 col-sm-12">
                    <div class="card mb-3">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-md-12">
                                <img src="{{ asset('/storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="card-img-top object-fit-fill" style="aspect-ratio: 4/3">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('carriere.show', $item->slug) }}"
                                            class="link">{{ $item->title }}</a></h5>
                                    <p class="fs-12 text-left">{{ Str::limit($item->excerpt, 70) }}</p>
                                    <a href="{{ route('carriere.show', $item->slug) }}" class="btn btn-primary">Postuler</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>


    </section>
@endsection

@section('javascript')

    <script>
        /*$(document).ready(function(){
          $("#form").hide();
          $("a.postuler").click(function(){
            $("#form").toggle();
          });
        });*/
    </script>

@endsection