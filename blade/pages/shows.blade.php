@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Shows')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'shows'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Shows</h1>

    <div class="mx-auto w-full container px-3 pb-6 h-full">
        <content-row
            content-list='{{ $startedContentJson }}'
            section-title="continue"
            section-url="#"
        ></content-row>

        @include('musora-ui::partials.shows-content', $shows)
    </div>

    @include('musora-ui::partials.footer')
@endsection
