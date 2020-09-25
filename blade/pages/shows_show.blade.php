@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Shows')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'shows'])
@endsection

@section('musora-ui::app')
    <div class="container w-full h-full mx-auto px-3 pt-4">
        <content-row
            content-list='{{ $continueVideos }}'
            section-title="continue"
            section-url="{{ $continueAllUrl }}"
        ></content-row>
    </div>

    <shows-content
        preload-data='{{ $showsData }}'
        infinite-scroll
        use-progress-filters
    ></shows-content>

    @include('musora-ui::partials.footer')
@endsection
