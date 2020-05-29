@extends('layouts.members')

@section('title', 'Members - Shows')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'shows'])
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

$shows = [
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-live.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/behind-the-scenes.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/bootcamps.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/challenges.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/sonor-drums.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/exploring-beats.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/gear.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/on-the-road.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/performances.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-podcast.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-quick-tips.jpg',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/advent-calendar-show-card.jpg',
        'url' => '#',
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

        @include('sections.shows-content', $shows)
    </div>
@endsection