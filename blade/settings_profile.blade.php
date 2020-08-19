@extends('layouts.members')

@section('title', 'Members - Profile')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@push('styles')
<style type="text/css">
.profile-label {
    width: 200px;
}
.modal-form {
    background-color: rgba(0,0,0,.6);
    transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    -webkit-transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    cursor: pointer;
}
.modal-form.active {
    display: flex;
    opacity: 1;
}
</style>
@endpush

@php
$userData = [
    'id' => 1,
    'display' => [
        'title' => 'display name',
        'inputs' => [
            'display_name' => 'Brandon Toews',
        ],
    ],
    'about' => [
        'title' => 'about brandon toews',
        'inputs' => [
            'first_name' => 'Brandon',
            'last_name' => 'Toews',
            'country' => '',
            'birthday' => '2018-05-07',
            'biography' => 'test bio text',
        ],
    ],
    'gear' => [
        'title' => 'my gear',
        'inputs' => [
            'drums_playing_since_year' => '1996',
            'drums_gear_set_brands' => 'gear set brand',
            'drums_gear_cymbal_brands' => 'gear cymbal brand',
            'drums_gear_hardware_brands' => 'gear hardware brand',
            'drums_gear_stick_brands' => 'gear stick brands',
        ],
    ],
];
$inputErrors = [
    'display' => [],
    'about' => [
        'first_name' => 'test error message',
    ],
    'gear' => [],
];
@endphp


@section('content')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row items-stretch">
        @include('sections.profile-sidenav', ['active' => 'profile'])

        <div class="flex-1 flex-grow">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">profile</h1>
            </div>

            @include(
                'sections.profile.display-name',
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
                'sections.profile.about',
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
                'sections.profile.gear',
                [
                    'data' => $userData['gear'],
                    'errors' => $inputErrors['gear'],
                    'form' => [
                        'method' => 'patch',
                        'action' => '/usora/user/update/' . $userData['id'] . '/',
                    ],
                ]
            )
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
let modalForms = Array.from(document.getElementsByClassName('modal-trigger'));

modalForms.forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            let modalId = element.getAttribute('data-target');
            let modalElement = document.getElementById(modalId);

            modalElement.classList.add('active');

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
@endpush