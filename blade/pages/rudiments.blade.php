@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Rudiments')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'rudiments'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Rudiments</h1>

    <div class="container w-full h-full mx-auto px-3">
        <content-row
            content-list='{{ $continueVideos }}'
            section-title="continue"
            section-url="{{ $continueAllUrl }}"
        ></content-row>
    </div>

    <div class="pb-6">
        <rudiments-content
            preload-data='{{ $rudimentsData }}'
            topics-filters-title='rudiment types'
            infinite-scroll
        ></rudiments-content>
    </div>

    @include('musora-ui::partials.footer')
@endsection
