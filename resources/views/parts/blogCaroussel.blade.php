@foreach($datas as $data)
    <div class="multi-carousel-container" id="multiCarousel">
        <div class="multi-carousel-inner" id="carouselInner">
            <!-- Original items only -->
            <div class="multi-carousel-item" data-index="{{ $data->key }}">
                <div class="img-container">
                    <img src="{{ asset('/storage/' . $data->image) }}" alt="{{ $data->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="{{ route('carriere.show', $data->slug) }}" class="link">{{ $data->title }}</a></h5>
                        <p class="fs-12 text-left">{{ Str::limit($data->excerpt, 70) }}</p>
                        <a href="{{ route('carriere.show', $data->slug) }}" class="btn btn-primary w-100">Apply</a>
                    </div>
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
@endforeach