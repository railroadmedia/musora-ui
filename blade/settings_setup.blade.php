@extends('layouts.members')

@section('title', 'Members - Notification Settings')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@section('content')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row">
        @include('sections.profile-sidenav', ['active' => 'settings'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">notification settings</h1>
            </div>
        </div>
    </div>
@endsection
