@extends('website-layout.layout')

@section('page-title', 'Blog Details')

@section('body-class', 'page-blog')


@section('main-content')

    @include('website-shared.breadcrumb', [
        'background_image' => 'assets/img/blog-header.jpg',
        'title' => 'Blog Details',
        'links' => [['url' => '/', 'title' => 'Home'],['url' => '/blog', 'title' => 'Blog'], ['title' => 'Blog Details']],
    ])

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                @include('website-pages.blog-details.paritals.blog-details-side')

                @include('website-pages.blog.partials.search-side', ['recent_posts' => $recent_posts])


            </div>

        </div>
    </section><!-- End Blog Section -->


@endsection
