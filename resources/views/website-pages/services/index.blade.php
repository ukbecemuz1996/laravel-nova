@extends('website-layout.layout')

@section('page-title', 'Our Services')

@section('body-class', 'page-services')


@section('main-content')

    @include('website-shared.breadcrumb', [
        'background_image' => 'assets/img/services-header.jpg',
        'title' => 'Services',
        'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Services']],
    ])

    @include('website-pages.home.sections.our-services')

    @include('website-pages.services.sections.services-cards')

    @include('website-pages.services.sections.testimonials')



@endsection
