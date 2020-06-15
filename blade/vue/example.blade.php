@extends('layouts.members')

@section('title', 'Members - Edge')

@section('menu')
@include('sections.menu', ['active' => 'edge'])
@include('sections.edge-nav')
@endsection

@php
$continueVideos = [
[
'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
'teacherName' => 'Instructor one',
'contentType' => 'content type',
'videoTitle' => 'Continue Video One',
'difficulty' => 'Beginner - 1'
],
[
'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
'teacherName' => 'Instructor Two',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Two',
'difficulty' => 'Beginner - 1'
],
[
'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
'teacherName' => 'Other Instructor',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Three',
'difficulty' => 'Beginner - 1'
],
[
'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
'teacherName' => 'Instructor one',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
],
[
'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
'teacherName' => 'Instructor Two',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Five',
'difficulty' => 'Beginner - 1'
],
[
'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
'teacherName' => 'Other Instructor',
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

$filterGroups = [
[
'title' => 'content type',
'collapsed' => false,
'items' => [
[
'name' => 'drumeo-method',
'label' => 'drumeo method',
'tab' => 11,
'active' => true,
],
[
'name' => 'courses',
'tab' => 12,
'active' => true,
],
[
'name' => 'packs',
'tab' => 13
],
[
'name' => 'quick-tips',
'label' => 'quick tips',
'tab' => 14
],
[
'name' => 'live',
'tab' => 15
],
[
'name' => 'bootcamp',
'tab' => 16
],
]
],
[
'title' => 'instructor',
'collapsed' => true,
'items' => [
[
'name' => 'aaron-edgar',
'label' => 'Aaron Edgar',
'tab' => 11
],
[
'name' => 'adam-marko',
'label' => 'Adam Marko',
'tab' => 11
],
[
'name' => 'anika-nilles',
'label' => 'Anika Nilles',
'tab' => 11,
'active' => true,
],
[
'name' => 'antonia-sanchez',
'label' => 'Antonia Sanchez',
'tab' => 11
],
[
'name' => 'benny-greb',
'label' => 'Benny Greb',
'tab' => 11,
'active' => true,
],
[
'name' => 'billy-cobham',
'label' => 'Billy Cobham',
'tab' => 11
],
[
'name' => 'billy-rymer',
'label' => 'Billy Rymer',
'tab' => 11
],
[
'name' => 'brandon-khoo',
'label' => 'Brandon Khoo',
'tab' => 11
],
[
'name' => 'brian-frasier-moore',
'label' => 'Brian Frasier-Moore',
'tab' => 11
],
[
'name' => 'brian-tichy',
'label' => 'Brian Tichy',
'tab' => 11
],
[
'name' => 'bruce-becker',
'label' => 'Bruce Becker',
'tab' => 11
],
[
'name' => 'camille-bigeault',
'label' => 'Camille Bigeault',
'tab' => 11
],
[
'name' => 'carmine-appice',
'label' => 'Carmine Appice',
'tab' => 11
],
]
],
[
'title' => 'style',
'collapsed' => true,
'items' => [],
],
[
'title' => 'progress',
'collapsed' => true,
'items' => []
]
];

$sectionVideos = [
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
'teacherName' => 'Instructor Four',
'icon' => 'icon-courses',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
],
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
'teacherName' => 'Instructor Four',
'icon' => 'icon-courses',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
],
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
'teacherName' => 'Instructor Four',
'icon' => 'icon-courses',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
],
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
'teacherName' => 'Instructor Four',
'icon' => 'icon-courses',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
],
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
'teacherName' => 'Instructor Four',
'icon' => 'icon-courses',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
],
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
'teacherName' => 'Instructor Four',
'icon' => 'icon-courses',
'contentType' => 'content type',
'videoTitle' => 'Continue Video Four',
'difficulty' => 'Beginner - 1'
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
            @include(
            'sections.badge-checkboxes-group',
            [
            'checkboxes' => $lessons,
            'skipCollapseStyle' => true,
            'skipCollapseScript' => true,
            'title' => 'what do you want to work on?',
            ]
            )
        </div>
        <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
            @include('sections.level-selector', ['skipCollapseStyle' => true, 'skipCollapseScript' => true])
        </div>
    </div>

    @include(
    'sections.video-content',
    [
    'filters' => $filterGroups,
    'videos' => $sectionVideos,
    'videosPerRow' => 4,
    'results' => [
    'count' => 114,
    'type' => 'Lessons'
    ],
    ]
    )
</div>
@endsection
