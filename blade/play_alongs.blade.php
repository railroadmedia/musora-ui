@extends('layouts.members')

@section('title', 'Members - Play Alongs')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'play-alongs'])
@endsection

@php
// todo - update lessons
$lessons = [
    ['name' => 'beats', 'tab' => 1],
    ['name' => 'theory', 'tab' => 2],
    ['name' => 'fills', 'tab' => 3],
    ['name' => 'styles', 'tab' => 4],
    ['name' => 'technique', 'tab' => 5],
    ['name' => 'rudiments', 'tab' => 6],
    ['name' => 'ear-training', 'label' => 'ear training', 'tab' => 7],
    ['name' => 'independence', 'tab' => 8],
    ['name' => 'musicality', 'tab' => 9],
    ['name' => 'gear', 'tab' => 10],
];

$filterGroups = [
    [
        'title' => 'tempo',
        'collapsed' => false,
        'items' => [
            [
                'name' => '50-90',
                'tab' => 11,
                'active' => true,
            ],
            [
                'name' => '91-120',
                'tab' => 12,
            ],
            [
                'name' => '121-150',
                'tab' => 13
            ],
            [
                'name' => '151-180',
                'tab' => 14
            ],
            [
                'name' => '181',
                'label' => '181+',
                'tab' => 15
            ],
        ]
    ],
    [
        'title' => 'favorites',
        'collapsed' => true,
        'items' => [],
    ],
    [
        'title' => 'completed',
        'collapsed' => true,
        'items' => []
    ]
];
@endphp

@section('content')
    @include('sections.user-stats')

    <div class="mx-auto w-full container px-3 h-full pt-4">
        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include('sections.badge-checkboxes-group', ['checkboxes' => $lessons, 'skipCollapseStyle' => true, 'skipCollapseScript' => true])
            </div>
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include('sections.level-selector', ['skipCollapseStyle' => true, 'skipCollapseScript' => true])
            </div>
        </div>

        <!-- todo - update videos section -->
        @include(
            'sections.video-content',
            [
                'filters' => $filterGroups,
                'videos' => []
            ]
        )
    </div>
@endsection
