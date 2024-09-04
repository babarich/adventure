@if($testimonial->rate)
    @if((int)$testimonial->rate=== 1 && (int)$testimonial->rate < 2)
        <button  class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>

    @elseif((int)$testimonial->rate === 2 && (int)$testimonial->rate < 3)
        <button  class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
    @elseif((int)$testimonial->rate === 3 && (int)$testimonial->rate < 4)
        <button  class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
    @elseif((int)$testimonial->rate === 4 && (int)$testimonial->rate < 5)
        <button  class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-outline-warning btn-sm"><i class="bx bx-star"></i></button>
    @else
        <button  class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
        <button class="btn btn-warning btn-sm"><i class="bx bx-star"></i></button>
    @endif
@endif
