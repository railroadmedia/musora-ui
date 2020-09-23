@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Songs')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'songs'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Songs</h1>

    <div class="container w-full h-full mx-auto px-3">
        <content-row
            content-list='{{ $continueVideos }}'
            section-title="continue"
            section-url="{{ $continueAllUrl }}"
        ></content-row>
    </div>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what style do you want to play?'
        topics-filters-key='style'
        :cards-per-row='5'
        preload-data='{{ $songsData }}'
        use-songs-content-type-filters
        use-progress-filters
        infinite-scroll
    ></content-catalogue>
@endsection
