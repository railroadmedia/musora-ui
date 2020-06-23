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
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1',
    ]
];

$newVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
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
                'icon' => 'icon-info',
            ],
            [
                'name' => 'courses',
                'tab' => 12,
                'active' => true,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'packs',
                'tab' => 13,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'quick-tips',
                'label' => 'quick tips',
                'tab' => 14,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'live',
                'tab' => 15,
                'icon' => 'icon-info',
            ],
            [
                'name' => 'bootcamp',
                'tab' => 16,
                'icon' => 'icon-info',
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
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
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
        :videos-list='@json($sectionVideos)'
        :edge-filters-list='@json($lessons)'
        :level-selector='2'
        :filter-groups='@json($filterGroups)'
        edge-filters-title='what do you want to work on?'
        :videos-per-row="4"
    ></filtered-videos-content>
@endsection
