<div class="reviews-stars">
    @for($i = 0; $i < (int) $stars; $i++)
        <i class="bi-star-fill reviews-icon"></i>
    @endfor
    @if((int) $stars != 5)
        @for($i = 0; $i < 5 - (int) $stars; $i++)
            <i class="bi-star reviews-icon"></i>
        @endfor
    @endif
</div>
