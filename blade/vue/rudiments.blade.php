@extends('vue.layout')

@section('title', 'Members - Rudiments')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'rudiments'])
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

$rudimentTypes = [
    ['name' => 'all', 'tab' => 1],
    ['name' => 'drags', 'tab' => 2],
    ['name' => 'flams', 'tab' => 3],
    ['name' => 'paradiddles', 'tab' => 4],
    ['name' => 'rolls', 'tab' => 5],
];

$rudiments = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'teacher name',
        'title' => 'this is the lesson title',
        'sheet' => 'https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-roll.png',
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

    <rudiments-content
        :videos-list='@json($rudiments)'
        :edge-filters-list='@json($rudimentTypes)'
        edge-filters-title='rudiment types'
    ></rudiments-content>
@endsection
