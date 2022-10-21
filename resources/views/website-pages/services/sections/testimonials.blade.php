@php
    $ts = [
        [
            'stars' => 4,
            'img' => 'assets/img/testimonials/testimonials-1.jpg',
            'description' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name' => 'Saul Goodman',
            'position' => 'Ceo &amp; Founder',
        ],
        [
            'stars' => 3,
            'img' => 'assets/img/testimonials/testimonials-2.jpg',
            'description' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name' => 'Saul Goodman',
            'position' => 'Ceo &amp; Founder',
        ],
        [
            'stars' => 5,
            'img' => 'assets/img/testimonials/testimonials-3.jpg',
            'description' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name' => 'Saul Goodman',
            'position' => 'Ceo &amp; Founder',
        ],
        [
            'stars' => 1,
            'img' => 'assets/img/testimonials/testimonials-4.jpg',
            'description' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name' => 'Saul Goodman',
            'position' => 'Ceo &amp; Founder',
        ],
        [
            'stars' => 3,
            'img' => 'assets/img/testimonials/testimonials-5.jpg',
            'description' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name' => 'Saul Goodman',
            'position' => 'Ceo &amp; Founder',
        ],
    ];
@endphp
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Testimonials</h2>

        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($ts as $t)
                    <div class="swiper-slide">
                        @include('website-pages.services.testimonial', [
                            'stars' => $t['stars'],
                            'img' => $t['img'],
                            'description' => $t['description'],
                            'name' => $t['name'],
                            'position' => $t['position'],
                        ])
                    </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
