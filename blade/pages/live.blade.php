@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Live')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'live'])
@endsection

@php
$lastMonth = null;
@endphp

@section('musora-ui::content')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Live Schedule</h1>

    <div class="mx-auto w-full container h-full pt-4 mb-8">

        <div class="">
            @foreach($contentData as $content)

                @php
                    $showMonthClass = $content['month'] != $lastMonth ? 'show-month' : '';
                    $lastMonth = $content['month'];
                @endphp

                <div class="{{ $showMonthClass }}">
                    @component('musora-ui::utilities.event-card', $content)
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>

    @include('musora-ui::partials.footer')
@endsection
