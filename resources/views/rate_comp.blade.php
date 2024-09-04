@if($testimonial->rate)
    @if((int)$testimonial->rate=== 1 && (int)$testimonial->rate < 2)
        <i class="fa fa-star"></i>

    @elseif((int)$testimonial->rate === 2 && (int)$testimonial->rate < 3)
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>

    @elseif((int)$testimonial->rate === 3 && (int)$testimonial->rate < 4)
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>

    @elseif((int)$testimonial->rate === 4 && (int)$testimonial->rate < 5)
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    @else
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    @endif
@endif
