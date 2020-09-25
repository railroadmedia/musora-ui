@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Profile My List')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'my list'])
@endsection

@section('musora-ui::app')
    <my-list-content
        preload-data='{{ $mylistData }}'
        topics-filters-title='choose your list'
        infinite-scroll
    ></my-list-content>

    @include('musora-ui::partials.footer')
@endsection
