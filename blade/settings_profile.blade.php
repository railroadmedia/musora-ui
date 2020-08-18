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
    'display' => [
        'display_name' => 'Brandon Toews',
    ],
];
$data = [
    'display' => [
        'id' => 'setting-display-name',
        'title' => 'display name',
        'url' => '#',
        'items' => [
            'name' => [
                'name' => 'display_name',
                'label' => 'display name',
                'value' => 'Brandon Toews',
                'info' => 'This is the name other users will see on your profile, comments and forum posts.',
            ],
        ],
    ],
    'about' => [
        'id' => 'setting-about',
        'title' => 'about brandon toews',
        'url' => '#',
        'items' => [
            'fullName' => [
                'name' => 'display_name',
                'label' => 'full name',
                'value' => 'Brandon Toews',
            ],
            'location' => [
                'name' => 'display_name',
                'label' => 'location',
                'value' => '',
            ],
            'birthday' => [
                'name' => 'display_name',
                'label' => 'birthday',
                'value' => 'May 7, 2018',
            ],
            'biography' => [
                'name' => 'display_name',
                'label' => 'biography',
                'value' => '',
                'type' => 'textarea'
            ],
        ],
    ],
    'gear' => [
        'id' => 'setting-gear',
        'title' => 'my gear',
        'url' => '#',
        'items' => [
            'exp' => [
                'name' => 'display_name',
                'label' => 'drumming since',
                'value' => '',
            ],
            'drums' => [
                'name' => 'display_name',
                'label' => 'drums',
                'value' => '',
            ],
            'cymbals' => [
                'name' => 'display_name',
                'label' => 'cymbals',
                'value' => '',
            ],
            'hardware' => [
                'name' => 'display_name',
                'label' => 'hardware',
                'value' => '',
            ],
            'sticks' => [
                'name' => 'display_name',
                'label' => 'sticks',
                'value' => '',
            ],
        ],
    ],
];
@endphp


@section('content')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row items-stretch">
        @include('sections.profile-sidenav', ['active' => 'profile'])

        <div class="flex-1 flex-grow">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">profile</h1>
            </div>

            @include('sections.profile.display-name', ['data' => $userData['display']])

            <!-- todo: remove below, use custom forms for each section since displayed data is different than form fields -->
            @include('sections.profile-data', $data['about'])
            @include('sections.profile-data', $data['gear'])
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