@extends('layouts.members')

@section('title', 'Members - Drumeo Method')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'method'])
@endsection

@php
$lessonProgress = [
    'level' => '2.5',
    'percent' => 35,
    'xp' => 1250
];
@endphp

@section('content')
    @include('sections.user-stats')

    <div class="bg-blue-100 py-6">
        <div class="mx-auto w-full container px-3">
            @include('sections.next-lesson')
        </div>
    </div>

    <div class="mx-auto w-full container h-full pt-4 pb-10 mb-40 sm:mb-24 sm:pb-16 md:mb-20 lg:pb-12 lg:mb-12">
        @include('sections.method-content')
    </div>

    @include('sections.lesson-progress', $lessonProgress)
@endsection
