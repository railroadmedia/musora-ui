@extends('layouts.members')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu')
    @include('sections.edge-nav')
@endsection

@php
$continueVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1'
    ]
];

$newVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'New Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'New Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'New Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'New Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'New Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'New Video Six',
        'difficulty' => 'Beginner - 1'
    ]
];

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
@endphp

@section('content')
    @include('sections.user-stats')

    <div class="mx-auto w-full container px-3 large:px-0 h-full pt-4">
        @include(
            'sections.video-row',
            [
                'rowTitle' => 'Continue',
                'url' => '#continue-all',
                'videos' => $continueVideos
            ]
        )
        @include(
            'sections.video-row',
            [
                'rowTitle' => 'New',
                'url' => '#new-all',
                'videos' => $newVideos
            ]
        )

        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include('sections.badge-checkboxes-group', ['checkboxes' => $lessons, 'skipCollapseStyle' => true, 'skipCollapseScript' => true])
            </div>
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include('sections.level-selector', ['skipCollapseStyle' => true, 'skipCollapseScript' => true])
            </div>
        </div>
    </div>
@endsection
