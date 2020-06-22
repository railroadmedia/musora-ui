@extends('vue.layout')

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
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-jazz.jpg',
        'teacher' => 'Other Instructor',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-ska.jpg',
        'teacher' => 'Instructor one',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-world.jpg',
        'teacher' => 'Instructor Two',
        'icon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1 / 92 BPM'
    ],
];
@endphp

@section('app')
    @include('sections.user-stats')

    <filtered-videos-content
        :videos-list='@json($sectionVideos)'
        :edge-filters-list='@json($styles)'
        :level-selector='2'
        :filter-groups='@json($filterGroups)'
        edge-filters-title='what style do you want to play?'
        :videos-per-row="5"
    ></filtered-videos-content>
@endsection
