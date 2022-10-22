@extends('website-layout.layout')

@section('page-title', 'Our Team')

@section('body-class', 'page-team')


@section('main-content')

    @include('website-shared.breadcrumb', [
        'background_image' => 'assets/img/team-header.jpg',
        'title' => 'Team',
        'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Team']],
    ])

    @include('website-pages.about.sections.teams')


@endsection
