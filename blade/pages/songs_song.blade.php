@extends('musora-ui::layouts.vue_lesson')

@section('musora-ui::title', 'Members - Song')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('musora-ui::app')
    <div class="mx-auto w-full container px-3 flex">
        <div class="flex-1 flex flex-col lg:pr-4">
            <div class="flex w-full">
                <song-content
                    preload-data='{{ $songData }}'
                ><song-content>
            </div>
            <div class="lg:hidden">
                <related-songs
                    preload-data='{{ $relatedSongsData }}'
                ></related-songs>
            </div>
            <div class="flex w-full">
                <comments-list
                    comments-data='{{ $commentsData }}'
                    :current-user-data='@json($userData)'
                    :content-id='1'
                ></comments-list>
            </div>
        </div>
        <div class="hidden w-full lg:flex lg:flex-none lg:w-64">
            <related-songs
                preload-data='{{ $relatedSongsData }}'
            ></related-songs>
        </div>
    </div>

    @include('musora-ui::partials.footer')
@endsection
