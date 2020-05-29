@extends('layouts.members')

@section('title', 'Members - Songs')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'songs'])
@endsection

@php
$continueVideos = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1'
    ]
];

$styles = [
    ['name' => 'pop-rock', 'label' => 'pop/rock', 'tab' => 1],
    ['name' => 'jazz', 'tab' => 2],
    ['name' => 'funk', 'tab' => 3, 'active' => true],
    ['name' => 'metal', 'tab' => 4],
    ['name' => 'latin', 'tab' => 5],
    ['name' => 'world', 'tab' => 6],
    ['name' => 'r-b', 'label' => 'r&b', 'tab' => 7],
    ['name' => 'blues', 'tab' => 8],
    ['name' => 'electronic', 'tab' => 9],
    ['name' => 'odd-time', 'label' => 'odd time', 'tab' => 10],
];

$filterGroups = [
    [
        'title' => 'artist',
        'collapsed' => false,
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
        'title' => 'progress',
        'collapsed' => true,
        'items' => []
    ]
];

$sectionVideos = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
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

        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include(
                    'sections.badge-checkboxes-group',
                    [
                        'checkboxes' => $styles,
                        'skipCollapseStyle' => true,
                        'skipCollapseScript' => true,
                        'title' => 'what style do you want to play?',
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
                'videosPerRow' => 5,
            ]
        )
    </div>
@endsection
