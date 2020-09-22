@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Notification Settings')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'settings'])
@endsection

@section('musora-ui::content')
    <div class="mx-auto w-full container pt-8 px-3 sm:pr-0 sm:pl-3 h-full flex flex-col sm:flex-row">
        @include('musora-ui::partials.profile-sidenav', ['active' => 'settings'])

        <div class="flex-1 flex flex-col flex-wrap">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">notification settings</h1>
            </div>

            @include(
                'musora-ui::partials.profile.settings',
                [
                    'data' => $data,
                    'form' => $form,
                ]
            )
        </div>
    </div>
@endsection
