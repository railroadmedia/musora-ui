@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Student Focus')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'student focus'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Student Focus</h1>

    <div class="container w-full h-full mx-auto px-3">
        <content-row
            content-list='{{ $continueVideos }}'
            section-title="continue"
            section-url="{{ $continueAllUrl }}"
        ></content-row>
    </div>

    <content-catalogue
        :cards-per-row='4'
        preload-data='{{ $studentFocusData }}'
        infinite-scroll
        topics-filters-disabled
        level-selector-disabled
        use-student-focus-content-type-filters
        use-progress-filters
    ></content-catalogue>

    @include('musora-ui::partials.student-plan')
@endsection
