@foreach($events as $event)
    <div class="col-lg-4 col-md-6 col-12">
        <div class="news-thumb mb-4">
            <a href="{{ route('news-detail', $event->id) }}">
                <img src="images/news/{{ $event->img }}" class="img-fluid news-image" alt="{{ $event->title }}">
            </a>

            <div class="news-text-info">
                <span class="category-tag me-3 bg-info">{{ $event->category }}</span>

                <strong>{{ Carbon\Carbon::parse($event->date)->format('d F Y') }}</strong>

                <h5 class="news-title mt-2">
                    <a href="{{ route('news-detail', $event->id) }}" class="news-title-link">{{ $event->title }}</a>
                </h5>
            </div>
        </div>
    </div>
@endforeach

