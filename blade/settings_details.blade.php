@extends('layouts.members')

@section('title', 'Members - Account Details')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@php
$userData = [
    'id' => 1,
    'inputs' => [],
];
@endphp

@push('styles')
<style type="text/css">
.modal {
    background-color: rgba(0,0,0,.6);
    transition: opacity .3s ease-in-out,visibility .3s ease-in-out;
    -webkit-transition: opacity .3s ease-in-out,visibility .3s ease-in-out;
    cursor: pointer;
}
.modal.active {
    display: flex;
    opacity: 1;
}
</style>
@endpush

@section('content')
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

@push('scripts')
<script type="text/javascript">
let modalTriggers = Array.from(document.getElementsByClassName('modal-trigger'));

modalTriggers.forEach(function(element) {
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
