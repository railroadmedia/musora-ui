@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Schedule')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'schedule'])
@endsection

@php
$lastMonth = null;
@endphp

@section('musora-ui::content')
    @include('musora-ui::partials.user-stats')

    <div class="container w-full mx-auto px-3 pt-6 flex justify-between items-center">
        <h1 class="font-extrabold text-4xl">Live Schedule</h1>
        <div>
            @component(
                'musora-ui::utilities.anchor-button',
                [
                    'labelText' => 'subscribe to calendar',
                    'theme' => 'blue-reversed',
                    'iconClass' => 'fas fa-calendar-plus',
                ]
            )
            @endcomponent
        </div>
    </div>

    <div class="mx-auto w-full container h-full pt-4">

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
        <div class="py-4 flex items-center justify-center">
            @component(
                'musora-ui::utilities.anchor-button',
                [
                    'labelText' => 'print schedule',
                    'theme' => 'blue',
                    'iconClass' => 'icon-print',
                ]
            )
            @endcomponent
        </div>
    </div>
@endsection
