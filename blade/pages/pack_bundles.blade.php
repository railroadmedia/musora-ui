@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Packs')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'packs'])
    @include('musora-ui::partials.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('musora-ui::content')
    @include('musora-ui::partials.pack-description')

    <div class="mx-auto w-full container h-full px-3 pt-4 mb-8">
        <div class="py-4">
            <h2 class="font-bold text-3xl">{{ $title }}</h2>
        </div>

        @include('musora-ui::partials.pack-bundles')
    </div>

    @include('musora-ui::partials.footer')
@endsection
