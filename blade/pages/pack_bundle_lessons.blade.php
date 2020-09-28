@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Packs')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'packs'])
    @include('musora-ui::partials.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('musora-ui::content')
    @include('musora-ui::partials.pack-description')

    @include('musora-ui::partials.lesson-progress', $lessonProgress)

    <div class="mx-auto w-full container h-full pt-4 mb-8">
        @include('musora-ui::partials.pack-bundle-lessons')
    </div>

    @include('musora-ui::partials.footer')
@endsection
