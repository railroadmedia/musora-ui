@extends('layouts.members')

@section('title', 'Members - Profile Dashboard')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'dashboard'])
@endsection

@php
$videosContinue = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
    ]
];

$videosComplete = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
        'showCompleteIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
        'showCompleteIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
        'showCompleteIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
        'showCompleteIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
        'showCompleteIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1',
        'hideAddIcon' => true,
        'showCompleteIcon' => true,
    ]
];
@endphp

@section('content')
    @include('sections.user-stats-short')
    @include('sections.user-stats-details')

    <div class="mx-auto w-full container px-3 h-full">
        @include(
            'sections.video-row',
            [
                'rowTitle' => 'Continue',
                'url' => '#continue-all',
                'videos' => $videosContinue
            ]
        )

        @include(
            'sections.video-row',
            [
                'rowTitle' => 'Completed',
                'url' => '#completed-all',
                'videos' => $videosComplete
            ]
        )

        @include('sections.user-about')
    </div>
@endsection
