@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Account Details')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'settings'])
@endsection

@section('musora-ui::content')
    <div class="mx-auto w-full container pt-8 pb-6 sm:pl-3 h-full flex flex-col sm:flex-row">
        @include('musora-ui::partials.profile-sidenav', ['active' => 'account details'])

        <div class="flex-1 flex flex-col">
            <div class="p-8">
                <h1 class="leading-none text-3xl font-bold capitalize">account details</h1>
            </div>

            @include('musora-ui::partials.profile.membership')
        </div>
    </div>

    @include('musora-ui::partials.footer')
@endsection
