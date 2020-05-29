@extends('layouts.members')

@section('title', 'Members - Play Alongs')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'play-alongs'])
@endsection

@php
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
        'title' => 'tempo',
        'collapsed' => false,
        'items' => [
            [
                'name' => '50-90',
                'tab' => 11,
                'active' => true,
            ],
            [
                'name' => '91-120',
                'tab' => 12,
            ],
            [
                'name' => '121-150',
                'tab' => 13
            ],
            [
                'name' => '151-180',
                'tab' => 14
            ],
            [
                'name' => '181',
                'label' => '181+',
                'tab' => 15
            ],
        ]
    ],
    [
        'title' => 'favorites',
        'collapsed' => true,
        'items' => [],
    ],
    [
        'title' => 'completed',
        'collapsed' => true,
        'items' => []
    ]
];

$sectionVideos = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
];
@endphp

@section('content')
    @include('sections.user-stats')

    <div class="mx-auto w-full container px-3 h-full pt-4">
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
