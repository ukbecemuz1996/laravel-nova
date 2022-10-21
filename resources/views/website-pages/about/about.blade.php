@extends('website-layout.layout')

@section('page-title', 'About Us')

@section('body-class', 'page-about')


@section('main-content')

    @include('website-shared.breadcrumb', [
        'background_image' => 'assets/img/about-header.jpg',
        'title' => 'About',
        'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'About']],
    ])

    @include('website-pages.about.sections.about-section')

    @include('website-pages.home.sections.why-choose-us')

    @include('website-pages.home.sections.call-to-action')

    @include('website-pages.about.sections.teams')

@endsection
