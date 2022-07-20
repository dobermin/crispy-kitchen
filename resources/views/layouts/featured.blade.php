@foreach($features as $featured)
    <div class="col-lg-6 col-md-6 col-12">
        <div class="news-thumb mb-4">
            <a href="{{ route('news-detail', $featured->id) }}">
                <img src="images/news/{{ $featured->img }}"
                     class="img-fluid news-image" alt="">
            </a>

            <div class="news-text-info news-text-info-large">
                <span class="category-tag bg-danger">{{ $featured->category }}</span>

                <h5 class="news-title mt-2">
                    <a href="{{ route('news-detail', $featured->id) }}"
                       class="news-title-link">{{ $featured->title }}</a>
                </h5>
            </div>
        </div>
    </div>
@endforeach

