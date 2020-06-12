@extends('layouts.members')

@section('title', 'Members - Search Results')

@section('menu')
    @include('sections.menu')
    @include('sections.search-input')
@endsection

@php
$filterGroups = [
    [
        'title' => 'content type',
        'collapsed' => false,
        'items' => [
            [
                'name' => 'courses',
                'tab' => 3,
                'active' => true,
            ],
            [
                'name' => 'drumeo-method',
                'label' => 'drumeo method',
                'tab' => 4,
                'active' => true,
            ],
            [
                'name' => 'songs',
                'tab' => 5,
            ],
            [
                'name' => 'play-alongs',
                'label' => 'play-alongs',
                'tab' => 6,
            ],
            [
                'name' => 'rudiments',
                'tab' => 7,
            ],
            [
                'name' => 'student focus',
                'label' => 'student focus',
                'tab' => 8,
            ],
            [
                'name' => 'show-live',
                'label' => 'show - live',
                'tab' => 9,
            ],
            [
                'name' => 'show-quick-tips',
                'label' => 'show - quick tips',
                'tab' => 10,
            ],
            [
                'name' => 'show-bootcamps',
                'label' => 'show - bootcamps',
                'tab' => 11,
            ],
            [
                'name' => 'show-live',
                'label' => 'show - live',
                'tab' => 12,
            ],
            [
                'name' => 'show-quick-tips',
                'label' => 'show - quick tips',
                'tab' => 13,
            ],
            [
                'name' => 'show-bootcamps',
                'label' => 'show - bootcamps',
                'tab' => 14,
            ],
        ],
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
        'teacherName' => 'teacher name',
        'contentType' => 'content type',
        'videoTitle' => 'This is the lesson title',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'showAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'showAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Three',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'showAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Four',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Four',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'showAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video One',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'showAddIcon' => true,
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'showAddIcon' => true,
    ],
];
@endphp

@section('content')
    <div class="mx-auto w-full container lg:pl-3 h-full">
        @include(
            'sections.search-content',
            [
                'filterGroups' => $filterGroups,
                'videos' => $sectionVideos,
            ]
        )
    </div>
@endsection
