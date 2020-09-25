@extends('musora-ui::layouts.vue_profile')

@section('musora-ui::title', 'Members - Profile')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'settings'])
@endsection

@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $musoraProfileJsPath }}"></script>
@endpush

@section('musora-ui::app')
    <div class="mx-auto w-full container pt-8 pb-4 px-3 sm:pr-0 sm:pl-3 h-full flex flex-col sm:flex-row items-stretch">
        @include('musora-ui::partials.profile-sidenav', ['active' => 'profile'])

        <div class="flex-1 flex-grow">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">profile</h1>
            </div>

            @include(
                'musora-ui::partials.profile.display-name',
                [
                    'data' => $userData['display'],
                    'errors' => $inputErrors['display'],
                    'form' => [
                        'method' => 'patch',
                        'action' => '/usora/user/update/' . $userData['id'] . '/',
                    ],
                ]
            )

            @include(
                'musora-ui::partials.profile.avatar',
                [
                    'data' => $userData['avatar'],
                ]
            )

            @include(
                'musora-ui::partials.profile.about',
                [
                    'data' => $userData['about'],
                    'errors' => $inputErrors['about'],
                    'form' => [
                        'method' => 'patch',
                        'action' => '/usora/user/update/' . $userData['id'] . '/',
                    ],
                ]
            )

            @include(
                'musora-ui::partials.profile.gear',
                [
                    'data' => $userData['gear'],
                    'errors' => $inputErrors['gear'],
                    'form' => [
                        'method' => 'patch',
                        'action' => '/usora/user/update/' . $userData['id'] . '/',
                    ],
                ]
            )

            @include(
                'musora-ui::partials.profile.gear-image',
                [
                    'data' => $userData['gear-photo'],
                ]
            )
        </div>
    </div>

    @include('musora-ui::partials.footer')
@endsection
