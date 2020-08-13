@extends('layouts.members')

@section('title', 'Members - Packs')

@push('styles')
<style type="text/css">
#menu-spacer {
    padding-top: 50px;
}

@media (min-width: 40rem) {
    #menu-spacer {
        padding-top: 65px;
    }
}
</style>
@endpush

@section('menu')
    @include('sections.menu', ['active' => 'packs'])
    <div id="menu-spacer"></div>
@endsection

@php
$continueVideos = [
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-packs',
        'contentType' => 'successful drumming',
        'videoTitle' => 'this is the lesson title',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-packs',
        'contentType' => 'rock drumming masterclass',
        'videoTitle' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-packs',
        'contentType' => 'cobus method',
        'videoTitle' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor one',
        'icon' => 'icon-packs',
        'contentType' => 'bass drum secrets',
        'videoTitle' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Instructor Two',
        'icon' => 'icon-packs',
        'contentType' => 'independence made easy',
        'videoTitle' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacherName' => 'Other Instructor',
        'icon' => 'icon-packs',
        'contentType' => 'content type',
        'videoTitle' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1'
    ]
];

$packs = [
    [
        'background' => 'https://dz5i3s4prcfun.cloudfront.net/drum-technique-made-easy/dtme-pack-card-thumb-w-o-logo.png',
        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-technique-made-easy/logo-white.png',
    ],
    [
        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/drumming-system-2.jpg',
        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/drumming-system-2.png',
    ],
    [
        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/independence-made-easy.jpg',
        'foreground' => 'https://dzryyo1we6bm3.cloudfront.net/independence-made-easy/sales/logo.png',
    ],
    [
        'background' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/packs/550/methods-and-mechanics.jpg',
        'foreground' => 'https://s3.amazonaws.com/drumeo-packs/Pack%20Images/Methods%20And%20Mechanics/logo-white.png',
    ],
    [
        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/successful-drumming.jpg',
        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/successful-drumming.png',
    ],
    [
        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/anatomy-of-a-drum-solo.jpg',
        'foreground' => 'https://s3.amazonaws.com/drumeo-packs/Pack%20Images/Anatomy%20Of%20A%20Drum%20Solo/logo-white.png',
    ],
];
@endphp

@section('content')
    @include('sections.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Packs</h1>

    <div class="mx-auto w-full container px-3 h-full">
        @include(
            'sections.video-row',
            [
                'rowTitle' => 'Continue',
                'url' => '#continue-all',
                'videos' => $continueVideos
            ]
        )

        @include(
            'sections.packs-content',
            [
                'packs' => $packs
            ]
        )
    </div>
@endsection
