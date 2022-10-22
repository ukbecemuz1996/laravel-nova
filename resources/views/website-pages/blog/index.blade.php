@extends('website-layout.layout')

@section('page-title', 'Blog')

@section('body-class', 'page-blog')


@section('main-content')

    @include('website-shared.breadcrumb', [
        'background_image' => 'assets/img/blog-header.jpg',
        'title' => 'Blog',
        'sub_title' => $sub_title,
        'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Blog']],
    ])

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                @include('website-pages.blog.partials.posts-side', ['posts' => $posts])

                @include('website-pages.blog.partials.search-side', ['recent_posts' => $recent_posts])


            </div>

        </div>
    </section><!-- End Blog Section -->


@endsection
