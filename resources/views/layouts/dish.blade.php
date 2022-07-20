@foreach($dishes as $dish)
    <div class="col-lg-{{ sizeof($dishes) == 2 ? 6 : 4 }} col-md-6 col-12">
        <div class="menu-thumb">
            <img src="images/{{ strtolower($dish->meal) }}/{{ $dish->img }}"
                 class="img-fluid menu-image" alt="{{ $dish->title }}">

            <div class="menu-info d-flex flex-wrap align-items-center">
                <h4 class="mb-0">{{ $dish->title }}</h4>

                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{ $dish->price }}</span>

                @if($dish->oldPrice)
                    <del class="ms-4"><small>$</small>{{ $dish->oldPrice }}</del>
                @endif

                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                    <h6 class="reviews-text mb-0 me-3">{{ $dish->stars }}/5</h6>

                    @include('layouts.reviews-stars', ['stars'=>$dish->stars])

                    <p class="reviews-text mb-0 ms-4">{{ $dish->reviews }} Reviews</p>
                </div>
            </div>
        </div>
    </div>
@endforeach
