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
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/behind-the-scenes.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/bootcamps.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/challenges.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/sonor-drums.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/exploring-beats.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/gear.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/on-the-road.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/performances.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-podcast.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-quick-tips.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
    [
        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/advent-calendar-show-card.jpg',
        'url' => '/router.php/vue/shows_show',
    ],
];
@endphp

@section('content')
    @include('sections.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Shows</h1>

    <div class="mx-auto w-full container px-3 h-full">
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
