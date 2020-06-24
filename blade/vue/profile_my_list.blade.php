@extends('vue.layout')

@section('title', 'Members - Profile My List')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'my list'])
@endsection

@php
$lists = [
    ['name' => 'my list', 'tab' => 1, 'active' => true],
    ['name' => 'in progress', 'tab' => 2],
    ['name' => 'complete', 'tab' => 3],
];

$filters = [
    'title' => 'content type',
    'items' => [
        [
            'name' => 'courses',
            'tab' => 4,
            'active' => true,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'drumeo-method',
            'label' => 'drumeo method',
            'tab' => 5,
            'active' => true,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'songs',
            'tab' => 6,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'play-alongs',
            'label' => 'play-alongs',
            'tab' => 7,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'rudiments',
            'tab' => 8,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'student focus',
            'label' => 'student focus',
            'tab' => 9,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'show-live',
            'label' => 'show - live',
            'tab' => 10,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'show-quick-tips',
            'label' => 'show - quick tips',
            'tab' => 11,
            'icon' => 'icon-info',
        ],
        [
            'name' => 'show-bootcamps',
            'label' => 'show - bootcamps',
            'tab' => 12,
            'icon' => 'icon-info',
        ],
    ],
];

$sectionVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'url' => '#',
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'detail' => 'detail #1',
        'date' => 'feb 21/20',
        'url' => '#',
    ],
];
@endphp

@section('app')
    <my-list-content
        :videos-list='@json($sectionVideos)'
        :edge-filters-list='@json($lists)'
        :filters-list='@json($filters)'
        edge-filters-title='choose your list'
    ></my-list-content>
@endsection
