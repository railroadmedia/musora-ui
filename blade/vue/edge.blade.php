@extends('vue.layout')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav')
@endsection

@php
$continueVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1'
    ]
];

$newVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Six',
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

$sectionVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'icon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
];
@endphp

@section('app')
    @include('sections.user-stats')

    <div class="container w-full h-full mx-auto px-3 pt-4">
        <videos-row
            :videos-list='@json($continueVideos)'
            section-title="continue"
            section-url="#"
        ></videos-row>

        <videos-row
            :videos-list='@json($newVideos)'
            section-title="new"
            section-url="#"
        ></videos-row>
    </div>

    <filtered-videos-content
        :videos-list='@json($newVideos)'
        :edge-filters-list='@json($lessons)'
        edge-filters-title='what do you want to work on?'
    ></filtered-videos-content>
@endsection
