@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Schedule')

@section('musora-ui::menu')
    @include('musora-ui::sections.hamburger_edge_nav', ['active' => 'edge'])
    @include('musora-ui::sections.edge_nav', ['active' => 'schedule'])
@endsection

@php
$contentData = [
    [
        'month' => 'aug',
        'date' => 'Mon 17',
        'time' => '8:00 AM',
        'title' => 'quick tips',
        'subtitle' => '5 Proven Ways To Fix Your Doubles',
        'type' => 'lesson release',
        'instructor' => 'TBD',
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Mon 17',
        'time' => '11:00 AM',
        'title' => 'question and answer',
        'subtitle' => 'Weekly Q&A',
        'type' => 'live broadcast',
        'instructor' => 'Kyle Radomsky',
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Tue 18',
        'time' => '11:00 AM',
        'title' => 'student focus',
        'subtitle' => 'Student Focus',
        'type' => 'live broadcast',
        'instructor' => 'Kyle Radomsky',
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Wed 19',
        'time' => '10:00 AM',
        'title' => 'question and answer',
        'subtitle' => 'Electronic Drums Q&A',
        'type' => 'live broadcast',
        'instructor' => 'John Wooton',
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Thu 20',
        'time' => '8:00 AM',
        'title' => 'quick tips',
        'subtitle' => 'Consitency As A Drummer',
        'type' => 'live broadcast',
        'instructor' => "Nick D'Virgilio",
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Thu 20',
        'time' => '3:00 PM',
        'title' => 'question and answer',
        'subtitle' => 'Rudiment Throwdown - All Strokes',
        'type' => 'live broadcast',
        'instructor' => 'John Wooton',
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Fri 21',
        'time' => '11:00 AM',
        'title' => 'student focus',
        'subtitle' => 'Student Focus',
        'type' => 'live broadcast',
        'instructor' => 'Aaron Edgar',
        'difficulty' => 'all skill levels',
    ],
    [
        'month' => 'aug',
        'date' => 'Sat 22',
        'time' => '8:00 AM',
        'title' => 'course',
        'subtitle' => "Glen's Linear Lickss",
        'type' => 'lesson release',
        'instructor' => 'Glen Sobel',
        'difficulty' => 'all skill levels',
    ],
];

$lastMonth = null;
@endphp

@section('musora-ui::content')
    @include('musora-ui::sections.user-stats')

    <div class="container w-full mx-auto px-3 pt-6 flex justify-between items-center">
        <h1 class="font-extrabold text-4xl">Live Schedule</h1>
        <div>
            @component(
                'musora-ui::core.anchor-button',
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
                    @component('core.event-card', $content)
                    @endcomponent
                </div>
            @endforeach
        </div>
        <div class="py-4 flex items-center justify-center">
            @component(
                'musora-ui::core.anchor-button',
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
