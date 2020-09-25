@extends('musora-ui::layouts.vue_profile')

@section('musora-ui::title', 'Members - Payments')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav')
    @include('musora-ui::partials.profile-nav', ['active' => 'settings'])
@endsection

@push('musora-ui::styles')
<script src="https://js.stripe.com/v3/"></script>
@endpush

@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $musoraProfileJsPath }}"></script>
@endpush

@section('musora-ui::app')
    <div class="mx-auto w-full container pt-8 pb-6 px-3 sm:pr-0 sm:pl-3 h-full flex flex-col sm:flex-row">
        @include('musora-ui::partials.profile-sidenav', ['active' => 'payments'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-2xl sm:text-3xl font-bold capitalize">payment details</h1>
            </div>

            @include(
                'musora-ui::partials.profile.payment-methods',
                [
                    'preloadData' => $paymentMethodsData,
                    'preloadCartData' => $cartData,
                    'user' => $user,
                    'errors' => $inputErrors['methods'],
                    'form' => [],
                    'stripePublishableKey' => 'pk_test_8WbVpdVKKttr3iqIdiT932ME',
                    'countries' => $countries,
                    'regions' => $regions,
                ]
            )

            @include(
                'musora-ui::partials.profile.payment-history',
                [
                    'data' => $payments,
                ]
            )
        </div>
    </div>

    @include('musora-ui::partials.footer')
@endsection
