@extends('layouts.public')

@section('title', 'Create Account - Profile Name')

@push('styles')
<link
    rel="stylesheet"
    href="https://d1prhhmg8i11jr.cloudfront.net/v1.0.0/dist/icons.css"
>
@endpush

@section('content')
<div class="m-10 w-full">
    <div class="text-center mb-6">
        <p class="text-sm">You are ready to get started! We've added some lessons to your list - we suggest starting with the "How To Use Drumeo Edge" course.</p>
    </div>
    <div class="sm:px-8 sm:py-4">
        @component('core.video-card', [
            'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
            'teacherName' => 'teacher name',
            'icon' => 'icon-courses',
            'contentType' => 'content type',
            'videoTitle' => 'How To Use Drumeo Edge',
            'difficulty' => 'Beginner - 1'
        ])
        @endcomponent
    </div>
</div>
@endsection

@section('footer')
<div class="bg-white flex flex-wrap p-6 uppercase mt-8 lg:mt-0">
        <div class="hide lg:w-1/6"></div>
        <div class="w-full lg:w-4/6">
            <div class="rounded-full bg-green-400 text-white p-1 m-auto max-w-xl leading-none grid grid-cols-1">
                <a href="#" class="rounded-full bg-green-400 text-white py-1">
                    <div class="leading-none text-center py-2">
                        <span class="font-semibold">get started!</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="hide lg:w-1/6"></div>
    </div>
@endsection

