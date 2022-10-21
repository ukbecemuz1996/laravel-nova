@php
    $cards = [
        [
            'img' => 'assets/img/cards-1.jpg',
            'title' => 'Eligendi omnis sunt veritatis.',
            'description' => 'Eligendi omnis sunt veritatis.</h4>
                                <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat
                                    deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo
                                    magnam. Dolor eos et.',
        ],
        [
            'img' => 'assets/img/cards-2.jpg',
            'title' => 'Eligendi omnis sunt veritatis.',
            'description' => 'Eligendi omnis sunt veritatis.</h4>
                                <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat
                                    deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo
                                    magnam. Dolor eos et.',
        ],
        [
            'img' => 'assets/img/cards-3.jpg',
            'title' => 'Eligendi omnis sunt veritatis.',
            'description' => 'Eligendi omnis sunt veritatis.</h4>
                                <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat
                                    deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo
                                    magnam. Dolor eos et.',
        ],
        [
            'img' => 'assets/img/cards-4.jpg',
            'title' => 'Eligendi omnis sunt veritatis.',
            'description' => 'Eligendi omnis sunt veritatis.</h4>
                                <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat
                                    deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo
                                    magnam. Dolor eos et.',
        ],
    ];
@endphp
<!-- ======= Services Cards Section ======= -->
<section id="services-cards" class="services-cards">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">
            @foreach ($cards as $card)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    @include('website-pages.services.service-card', [
                        'img' => $card['img'],
                        'title' => $card['title'],
                        'description' => $card['description'],
                    ])
                </div><!-- End Card Item -->
            @endforeach

        </div>

    </div>
</section><!-- End Services Cards Section -->
