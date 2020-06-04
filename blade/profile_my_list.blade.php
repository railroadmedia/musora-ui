@extends('layouts.members')

@section('title', 'Members - Profile My List')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'my list'])
@endsection

@php
$lists = [
    ['name' => 'my list', 'tab' => 1, 'active' => true],
    ['name' => 'in progress', 'tab' => 2],
    ['name' => 'complete', 'tab' => 3],
];

$filters = [
    'title' => 'content type',
    'items' => [
        [
            'name' => 'courses',
            'tab' => 4,
            'active' => true,
        ],
        [
            'name' => 'drumeo-method',
            'label' => 'drumeo method',
            'tab' => 5,
            'active' => true,
        ],
        [
            'name' => 'songs',
            'tab' => 6
        ],
        [
            'name' => 'play-alongs',
            'label' => 'play-alongs',
            'tab' => 7
        ],
        [
            'name' => 'rudiments',
            'tab' => 8
        ],
        [
            'name' => 'student focus',
            'label' => 'student focus',
            'tab' => 9
        ],
        [
            'name' => 'show-live',
            'label' => 'show - live',
            'tab' => 10
        ],
        [
            'name' => 'show-quick-tips',
            'label' => 'show - quick tips',
            'tab' => 11
        ],
        [
            'name' => 'show-bootcamps',
            'label' => 'show - bootcamps',
            'tab' => 12
        ],
        [
            'name' => 'show-live',
            'label' => 'show - live',
            'tab' => 13
        ],
        [
            'name' => 'show-quick-tips',
            'label' => 'show - quick tips',
            'tab' => 14
        ],
        [
            'name' => 'show-bootcamps',
            'label' => 'show - bootcamps',
            'tab' => 15
        ],
    ],
];

$sectionVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video One',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Three',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Four',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Four',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video One',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Two',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
    ],
];
@endphp

@section('content')
    <div class="mx-auto w-full container px-3 h-full pt-4">
        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include(
                    'sections.badge-checkboxes-group',
                    [
                        'checkboxes' => $lists,
                        'skipCollapseStyle' => true,
                        'skipCollapseScript' => true,
                        'title' => 'choose your list',
                    ]
                )
            </div>
        </div>
    </div>

    <div class="mx-auto w-full container lg:pl-3 h-full">
        @include(
            'sections.my-list-content',
            [
                'filters' => $filters,
                'videos' => $sectionVideos,
            ]
        )
    </div>
@endsection
