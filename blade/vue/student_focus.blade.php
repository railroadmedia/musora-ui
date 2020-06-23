@extends('vue.layout')

@section('title', 'Members - Student Focus')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'student focus'])
@endsection

@php
$continueVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ]
];

$filterGroups = [
    [
        'title' => 'instructor',
        'collapsed' => false,
        'items' => [
            [
                'name' => 'aaron-edgar',
                'label' => 'Aaron Edgar',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'adam-marko',
                'label' => 'Adam Marko',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'anika-nilles',
                'label' => 'Anika Nilles',
                'tab' => 11,
                'active' => true,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'antonia-sanchez',
                'label' => 'Antonia Sanchez',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'benny-greb',
                'label' => 'Benny Greb',
                'tab' => 11,
                'active' => true,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'billy-cobham',
                'label' => 'Billy Cobham',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'billy-rymer',
                'label' => 'Billy Rymer',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'brandon-khoo',
                'label' => 'Brandon Khoo',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'brian-frasier-moore',
                'label' => 'Brian Frasier-Moore',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'brian-tichy',
                'label' => 'Brian Tichy',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'bruce-becker',
                'label' => 'Bruce Becker',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'camille-bigeault',
                'label' => 'Camille Bigeault',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'carmine-appice',
                'label' => 'Carmine Appice',
                'tab' => 11,
                'icon' => 'icon-info',
            ],
        ]
    ],
    [
        'title' => 'progress',
        'collapsed' => true,
        'items' => [],
    ],
];

$sectionVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '#',
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
    </div>

    <filtered-videos-content
        :videos-list='@json($sectionVideos)'
        :filter-groups='@json($filterGroups)'
        edge-filters-disabled
        level-selector-disabled
        :videos-per-row="4"
    ></filtered-videos-content>

    @include('sections.student-plan')
@endsection
