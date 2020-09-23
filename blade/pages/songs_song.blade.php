@extends('musora-ui::layouts.vue_lesson')

@section('musora-ui::title', 'Members - Song')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('musora-ui::app')
    <div class="mx-auto w-full container relative px-3 pb-24">
        <div class="lg:mr-64">
            <song-content
                preload-data='{{ $songData }}'
            ><song-content>
        </div>
        <div class="lg:absolute top-0 right-0 lg:w-64">
            <related-songs
                preload-data='{{ $relatedSongsData }}'
            ></related-songs>
        </div>
        <div class="lg:mr-64">
            <comments-list
                comments-data='{{ $commentsData }}'
                :current-user-data='@json($userData)'
                :content-id='1'
            ></comments-list>
        </div>
    </div>
@endsection
