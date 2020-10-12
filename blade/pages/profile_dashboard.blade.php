@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Profile Dashboard')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'dashboard'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats-short')
    @include('musora-ui::partials.user-stats-details')

    <div class="mx-auto w-full container px-3 h-full">

        <div class="container w-full h-full mx-auto px-3">
            <content-row
                content-list='{{ $startedContentJsonData }}'
                section-title="continue"
                section-url="{{ $viewAllStartedLink }}"
                card-text-details-top="topic"
            ></content-row>
        </div>

        <div class="container w-full h-full mx-auto px-3">
            <content-row
                content-list='{{ $completedContentJsonData }}'
                section-title="Completed"
                section-url="{{ $viewAllCompletedLink }}"
                card-text-details-top="topic"
            ></content-row>
        </div>

        @include('musora-ui::partials.user-about')
    </div>

    @include('musora-ui::partials.footer')
@endsection
