@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Login Credentials')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'settings'])
@endsection

@section('musora-ui::content')
    <div class="mx-auto w-full container pt-8 pb-8 sm:pl-3 h-full flex flex-col sm:flex-row">
        @include('musora-ui::partials.profile-sidenav', ['active' => 'login credentials'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-2xl sm:text-3xl font-bold capitalize">login credentials</h1>
            </div>

            @include(
                'musora-ui::partials.profile.account-email',
                [
                    'data' => $userData['email'],
                    'errors' => $inputErrors['email'],
                    'form' => $forms['email'],
                ]
            )

            @include(
                'musora-ui::partials.profile.account-password',
                [
                    'data' => $userData['password'],
                    'errors' => $inputErrors['password'],
                    'form' => $forms['password'],
                ]
            )
        </div>
    </div>

    @include('musora-ui::partials.footer')
@endsection
