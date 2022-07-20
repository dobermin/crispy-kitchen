<x-main-layout>
    <x-slot name="title">
        Crispy Kitchen - Bootstrap 5 HTML Template
    </x-slot>
    <x-slot name="container">
        <section class="hero">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="heroText">

                            <h1 class="text-white mb-lg-5 mb-3">{{ $main->title }}</h1>

                            <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h4 class="text-white mb-0 me-3">{{ $main->stars }}/5</h4>
                                    @include('layouts.reviews-stars', ['stars'=>$main->stars])
                                </div>

                                <p class="text-white w-100">From <strong>{{ $main->reviews }}</strong> Customer Reviews
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide"
                             data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/{{ $main->img }}" class="img-fluid carousel-image"
                                             alt="{{ $main->title }}">
                                    </div>
                                    <div class="carousel-caption">
                                            <span class="text-white">
                                                <i class="bi-geo-alt me-2"></i>
                                                {{ $main->place }}
                                            </span>

                                        <h4 class="hero-text">{{ $main->restaurant }}</h4>
                                    </div>
                                </div>

                                @foreach($dishes as $dish)
                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="images/slide/{{ $dish->img }}"
                                                 class="img-fluid carousel-image"
                                                 alt="{{ $dish->title }}">
                                        </div>

                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">{{ $dish->title }}</h4>

                                                <span class="price-tag ms-4"><small>$</small>{{ $dish->price }}</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">{{ $dish->stars }}/5</h5>

                                                @include('layouts.reviews-stars', ['stars'=>$dish->stars])
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/production_ID_3769033.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>
        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Special Menus</h2>
                    </div>

                    @include('layouts.dish', ['dishes'=>$menus])
                </div>
            </div>
        </section>
        <section class="BgImage"></section>
        <section class="news section-padding">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>

                    @include('layouts.featured', ['features'=>$featured])
                    @include('layouts.events', ['events'=>$news])

                </div>
            </div>
        </section>
    </x-slot>
</x-main-layout>
