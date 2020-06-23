@extends('vue.layout')

@section('title', 'Members - Songs')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'songs'])
@endsection

@php
$continueVideos = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
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
        'items' => []
    ]
];

$sectionVideos = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'cstyle',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-songs',
        'contentType' => 'style',
        'title' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1',
        'url' => '/router.php/songs_song',
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
        :edge-filters-list='@json($styles)'
        :level-selector='2'
        :filter-groups='@json($filterGroups)'
        edge-filters-title='what style do you want to play?'
        :videos-per-row="5"
    ></filtered-videos-content>
@endsection
