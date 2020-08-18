@extends('layouts.members')

@section('title', 'Members - Login Credentials')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@section('content')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row">
        @include('sections.profile-sidenav', ['active' => 'login credentials'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">login credentials</h1>
            </div>
        </div>
    </div>
@endsection
