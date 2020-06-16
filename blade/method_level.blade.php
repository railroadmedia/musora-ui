@extends('layouts.members')

@section('title', 'Members - Drumeo Method')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'method'])
@endsection

@php
$data = [
    [
        'stat' => 'courses',
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
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 2,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-63.jpg',
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 3,
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/dcb-52a-550.jpg',
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 4,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-15.jpg',
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 5,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-45.jpg',
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 6,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dca-11.jpg',
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
    [
        'index' => 7,
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
        'title' => 'this is the course title',
        'length' => '10 mins',
        'xp' => '150 xp',
    ],
];
@endphp

@section('content')
    @include('sections.course-data', ['data' => $data])

    @include('sections.course-content', ['videos' => $videos])

    @include('sections.course-progress', ['percent' => 60])
@endsection
