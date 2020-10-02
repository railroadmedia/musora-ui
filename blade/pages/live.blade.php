@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Live')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'live'])
@endsection

@php
$lastMonth = null;
@endphp

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Live Schedule</h1>

    <div class="mx-auto w-full container h-full pt-4 mb-8">

        <schedule-catalogue
            preload-data='{{ $catalogueJsonData }}'
        ></schedule-catalogue>
    </div>

    @include('musora-ui::partials.footer')
@endsection
