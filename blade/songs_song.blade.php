@extends('layouts.members')

@section('title', 'Members - Song')

@php
$song = [
    'name' => 'american idiot',
    'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
    'artist' => 'green day',
    'genre' => 'rock',
    'likes' => 58,
];

$comments = [
    [
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        'likes' => 31,
        'added' => '5 days ago',
        'replies' => [],
    ],
    [
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.',
        'likes' => 0,
        'added' => '5 days ago',
        'replies' => [
            [
                'author' => [
                    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
                    'name' => 'brandon toews',
                    'level' => '2.3',
                    'border' => 'yellow',
                    'icon' => 'metronome-beep',
                ],
                'comment' => 'Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.',
                'likes' => 0,
                'added' => '5 days ago',
            ],
        ],
    ],
    [
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat.',
        'likes' => 8,
        'added' => '4 day ago',
        'replies' => [],
    ],
    [
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.',
        'likes' => 0,
        'added' => '3 day ago',
        'replies' => [
            [
                'author' => [
                    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
                    'name' => 'brandon toews',
                    'level' => '2.3',
                    'border' => 'yellow',
                    'icon' => 'metronome-beep',
                ],
                'comment' => 'Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique.',
                'likes' => 0,
                'added' => '2 days ago',
            ],
        ],
    ],
    [
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
        'likes' => 19,
        'added' => '3 day ago',
        'replies' => [],
    ],
    [
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.',
        'likes' => 0,
        'added' => '1 day ago',
        'replies' => [],
    ],
];

$breadcrumbs = [
    'parents' => [
        [
            'label' => 'songs',
            'url' => '/router.php/songs',
        ],
    ],
    'current' => [
        'label' => $song['name']
    ],
];

$songs = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 100,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 60,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 100,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 60,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
];

$progress = [
    'percent' => 10,
    'nextUrl' => '#'
];
@endphp

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('content')
    <div class="mx-auto w-full container relative px-3 pb-24">
        <div class="lg:mr-64">
            @include('sections.song', $song)
        </div>
        <div class="lg:absolute top-0 right-0 lg:w-64">
            @include('sections.related-songs', ['songs' => $songs])
        </div>
        <div class="lg:mr-64">
            @include('sections.comments', ['comments' => $comments])
        </div>
    </div>
@endsection
