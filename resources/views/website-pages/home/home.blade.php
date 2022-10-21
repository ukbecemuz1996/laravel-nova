@extends('website-layout.layout')

@section('page-title', 'Home Page')

@section('body-class', 'page-index')

@section('home-hero-section')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Focus On What Matters</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum
                            laboriosam
                            voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch
                                Video</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection

@section('main-content')

    @include('website-pages.home.sections.why-choose-us')

    @include('website-pages.home.sections.our-services')

    @include('website-pages.home.sections.call-to-action')

    @include('website-pages.home.sections.features')

    @include('website-pages.home.sections.recent-posts')

@endsection
