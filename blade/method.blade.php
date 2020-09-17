@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Drumeo Method')

@section('musora-ui::menu')
    @include('musora-ui::sections.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::sections.edge-nav', ['active' => 'method'])
@endsection

@php
$lessonProgress = [
    'level' => '2.5',
    'percent' => 35,
    'xp' => 1250
];
@endphp

@section('musora-ui::content')
    @include('musora-ui::sections.user-stats')

    <div class="bg-blue-100 py-6">
        <div class="mx-auto w-full container px-3">
            @include('musora-ui::sections.next-lesson')
        </div>
    </div>

    <div class="mx-auto w-full container h-full pt-4 pb-10 mb-40 sm:mb-24 sm:pb-16 md:mb-20 lg:pb-12 lg:mb-12">
        @include('musora-ui::sections.method-content')
    </div>

    @include('musora-ui::sections.lesson-progress', $lessonProgress)
@endsection
