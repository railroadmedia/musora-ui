@extends('layouts.members')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    <!-- todo: add sub-nav active class support -->
    @include('sections.edge-nav', ['active' => 'method'])
@endsection

@php
$lessonProgress = [
    'level' => '2.5',
    'percent' => 29,
    'xp' => 1250
];
@endphp

@section('content')
    @include('sections.user-stats')

    <div class="bg-blue-100 py-6">
        <div class="mx-auto w-full container px-3 large:px-0">
            @include('sections.next-lesson')
        </div>
    </div>

    <div class="mx-auto w-full container px-3 large:px-0 h-full pt-4 mb-20 pb-4">
        @include('sections.method-content')
    </div>
@endsection
