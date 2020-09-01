@extends('layouts.members')

@section('title', 'Members - Notification Settings')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@php
$userData = [
    'id' => 1,
    'inputs' => [
        'notify_weekly_update' => 1,
        'notify_on_lesson_comment_reply' => 0,
        'notify_on_lesson_comment_like' => 1,
        'notify_on_forum_followed_thread_reply' => 0,
        'notify_on_forum_post_like' => 1,
        'use_legacy_video_player' => 0,
    ],
];
@endphp

@section('content')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row">
        @include('sections.profile-sidenav', ['active' => 'settings'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">notification settings</h1>
            </div>

            @include(
                'sections.profile.settings',
                [
                    'data' => $userData['inputs'],
                    'form' => [
                        'method' => 'POST',
                        'action' => '/usora/user/update/' . $userData['id'] . '/',
                    ],
                ]
            )
        </div>
    </div>
@endsection