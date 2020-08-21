@extends('layouts.members')

@section('title', 'Members - Login Credentials')

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
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row">
        @include('sections.profile-sidenav', ['active' => 'login credentials'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">login credentials</h1>
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
