@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Search')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
@endsection

@section('musora-ui::app')
    <content-search
        preload-data='{{ $searchResultsData }}'
        use-progress-filters
    >
    </content-search>
@endsection
