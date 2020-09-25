@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Play Alongs')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'play-alongs'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Play-Alongs</h1>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what style do you want to play?'
        :cards-per-row='5'
        preload-data='{{ $playAlongsData }}'
        infinite-scroll
        use-play-alongs-content-type-filters
        use-progress-filters
    ></content-catalogue>

    @include('musora-ui::partials.footer')
@endsection
