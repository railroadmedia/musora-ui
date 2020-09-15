@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Account Details')

@section('musora-ui::menu')
    @include('musora-ui::sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@php
$userData = [
    'id' => 1,
    'inputs' => [],
];
@endphp

@section('musora-ui::content')
    <div class="mx-auto w-full container pt-8 sm:pl-3 h-full flex flex-col sm:flex-row">
        @include('sections.profile-sidenav', ['active' => 'account details'])

        <div class="flex-1 flex flex-col">
            <div class="p-8">
                <h1 class="leading-none text-3xl font-bold capitalize">account details</h1>
            </div>

            @include(
                'sections.profile.membership',
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
