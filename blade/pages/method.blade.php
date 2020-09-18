@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Drumeo Method')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'method'])
@endsection

@section('musora-ui::content')
    @include('musora-ui::partials.user-stats')

    <div class="bg-blue-100 py-6">
        <div class="mx-auto w-full container px-3">
            @include('musora-ui::partials.next-lesson', ['nextLesson' => $nextLesson])
        </div>
    </div>

    <div class="mx-auto w-full container h-full pt-4 pb-10 mb-40 sm:mb-24 sm:pb-16 md:mb-20 lg:pb-12 lg:mb-12">
        @include('musora-ui::partials.method-content', ['lessons' => $lessons])
    </div>

    @include('musora-ui::partials.lesson-progress', $lessonProgress)
@endsection
