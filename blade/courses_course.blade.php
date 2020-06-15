@extends('layouts.members')

@section('title', 'Members - Course')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'courses'])
@endsection

@php
$description = [
    'teacher' => 'jared falk',
    'difficulty' => 'difficulty here',
    'title' => 'how to use drumeo',
    'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.',
    'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
];

$stats = [
    [
        'stat' => 'lessons',
        'value' => 7,
    ],
    [
        'stat' => 'minutes',
        'value' => 17,
    ],
    [
        'stat' => 'xp',
        'value' => '32.2k',
    ],
];

$videos = [
    [
        'index' => 1,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 2,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-63.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 3,
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/dcb-52a-550.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 4,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-15.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 5,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-45.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 6,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dca-11.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 7,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
        'title' => 'this is the lesson title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
];
@endphp

@section('content')
    @include('sections.course-description', $description)
    @include('sections.course-data', ['stats' => $stats])

    @include('sections.course-content', ['videos' => $videos])

    @include('sections.course-progress', ['percent' => 60])
@endsection