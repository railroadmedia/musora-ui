@extends('layouts.members')

@section('title', 'Members - Login Credentials')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@php
$userData = [
    'id' => 1,
    'email' => [
        'title' => 'login email',
        'inputs' => [
            'email' => 'brandon@toews.com',
        ],
    ],
    'password' => [
        'title' => 'login password',
        'inputs' => [
            'password' => '********',
        ],
    ],
];
$inputErrors = [
    'email' => [],
    'password' => [],
];
@endphp

@section('content')
    <div class="mx-auto w-full container pt-8 sm:pl-3 h-full flex flex-col sm:flex-row">
        @include('sections.profile-sidenav', ['active' => 'login credentials'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-2xl sm:text-3xl font-bold capitalize">login credentials</h1>
            </div>

            @include(
                'sections.profile.account-email',
                [
                    'data' => $userData['email'],
                    'errors' => $inputErrors['email'],
                    'form' => [
                        'method' => 'patch',
                        'action' => '/usora/email-change/request/',
                    ],
                ]
            )

            @include(
                'sections.profile.account-password',
                [
                    'data' => $userData['password'],
                    'errors' => $inputErrors['password'],
                    'form' => [
                        'method' => 'patch',
                        'action' => '/usora/user/update-password/',
                    ],
                ]
            )
        </div>
    </div>
@endsection
