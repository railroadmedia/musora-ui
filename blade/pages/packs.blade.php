@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Packs')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'packs'])
    <div id="menu-spacer"></div>
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Packs</h1>

    <div class="mx-auto w-full container px-3 h-full mb-8">
        <content-row
            content-list='{{ $startedContentJson }}'
            section-title="continue"
            section-url="#"
        ></content-row>

        @include(
            'musora-ui::partials.packs-content',
            [
                'packs' => $packs
            ]
        )
    </div>

    @include('musora-ui::partials.footer')
@endsection
