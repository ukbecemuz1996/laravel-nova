<div class="testimonial-item">
    <div class="stars">
        @for ($i = 1; $i <= $stars; $i++)
            <i class="bi bi-star-fill"></i>
        @endfor

        @for ($i = 1; $i <= 5 - $stars; $i++)
            <i class="bi bi-star"></i>
        @endfor
    </div>
    <p>
        {{ $description }}
    </p>
    <div class="profile mt-auto">
        <img src="{{ $img }}" class="testimonial-img" alt="">
        <h3>{{ $name }}</h3>
        <h4>{{ $position }}</h4>
    </div>
</div>
