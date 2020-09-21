@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Profile Dashboard')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'dashboard'])
@endsection

@section('musora-ui::content')
    @include('musora-ui::partials.user-stats-short')
    @include('musora-ui::partials.user-stats-details')

    <div class="mx-auto w-full container px-3 h-full">
        @include(
            'musora-ui::partials.video-row',
            [
                'rowTitle' => 'Continue',
                'url' => $continueAllUrl,
                'videos' => $videosContinue
            ]
        )

        @include(
            'musora-ui::partials.video-row',
            [
                'rowTitle' => 'Completed',
                'url' => $completedAllUrl,
                'videos' => $videosComplete
            ]
        )

        @include('musora-ui::partials.user-about')
    </div>
@endsection
