@extends('vue.layout')

@section('title', 'Members - Payments')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@push('styles')
<script src="https://js.stripe.com/v3/"></script>
@endpush

@php
$data = [
    'user' => [
        'id' => 1,
        'hasSubscription' => true,
        'isActive' => true,
    ],
    'methods' => [
        [
            'id' => 1,
            'default' => true,
            'info' => 'Visa - 4242',
            'expiry' => '12/20',
        ]
    ],
    'payments' => [
        [
            'id' => 1,
            'date' => 'August 24, 2020',
            'payment-method' => 'Visa - 4242',
            'type' => 'INITIAL_ORDER',
            'amount' => '$197.00',
        ]
    ],
];
$inputErrors = [
    'methods' => [],
];
@endphp

@section('app')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row">
        @include('sections.profile-sidenav', ['active' => 'payments'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">payment details</h1>
            </div>

            @include(
                'sections.profile.payment-methods',
                [
                    'data' => $data['methods'],
                    'user' => $data['user'],
                    'errors' => $inputErrors['methods'],
                    'form' => [],
                    'stripePublishableKey' => 'pk_test_8WbVpdVKKttr3iqIdiT932ME',
                ]
            )

            @include(
                'sections.profile.payment-history',
                [
                    'data' => $data['payments'],
                ]
            )
        </div>
    </div>
@endsection
