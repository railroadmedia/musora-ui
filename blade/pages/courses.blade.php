@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Edge')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'courses'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Courses</h1>

    <div class="container w-full h-full mx-auto px-3">
        <content-row
            content-list='{{ $coursesData }}'
            section-title="continue"
            section-url="#"
            card-text-details-top="topic"
        ></content-row>
    </div>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what do you want to work on?'
        :cards-per-row='4'
        preload-data='{{ $coursesData }}'
        infinite-scroll
        use-courses-content-type-filters
        use-progress-filters
    ></content-catalogue>

    @include('musora-ui::partials.footer')
@endsection
