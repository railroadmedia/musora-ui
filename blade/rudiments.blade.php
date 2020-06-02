@extends('layouts.members')

@section('title', 'Members - Rudiments')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'rudiments'])
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

$rudimentTypes = [
    ['name' => 'all', 'tab' => 1],
    ['name' => 'drags', 'tab' => 2],
    ['name' => 'flams', 'tab' => 3],
    ['name' => 'paradiddles', 'tab' => 4],
    ['name' => 'rolls', 'tab' => 5],
];

$rudiments = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
    ],
];
@endphp

@section('content')
    @include('sections.user-stats')

    <div class="mx-auto w-full container px-3 h-full pt-4">
        @include(
            'sections.video-row',
            [
                'rowTitle' => 'Continue',
                'url' => '#continue-all',
                'videos' => $continueVideos
            ]
        )

        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include(
                    'sections.badge-checkboxes-group',
                    [
                        'checkboxes' => $rudimentTypes,
                        'skipCollapseStyle' => true,
                        'skipCollapseScript' => true,
                        'title' => 'rudiment types',
                    ]
                )
            </div>
        </div>
    </div>

    @include(
        'sections.rudiments', ['items' => $rudiments]
    )
@endsection
