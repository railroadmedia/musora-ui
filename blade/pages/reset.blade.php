@extends('musora-ui::layouts.public')

@section('musora-ui::title', 'Reset')

@section('musora-ui::content')
<div class="m-10 w-full">
    <p class="text-medium-gray text-sm">Please enter your email address and we will send you instructions to reset your password.</p>
    <div class="mt-3">
        @component('musora-ui::utilities.text-input', [
            'labelText' => 'Email Address',
            'inputId' => 'login-email',
            'tabIndex' => 1,
            'theme' => 'gray',
        ])
        @endcomponent
    </div>
    <div class="mt-4">
        @component('musora-ui::utilities.button', [
            'labelText' => 'get new password',
            'fullWidth' => 'true',
            'type' => 'submit',
            'tabIndex' => 3,
        ])
        @endcomponent
    </div>
    <div class="mt-8">
        <a href="/router.php/login" class="w-full text-center text-medium-gray text-sm inline-block focus:outline-none focus:shadow-outline">Back to Login</a>
    </div>
</div>
@endsection

@section('pitch')
<div class="py-8">
    <p class="text-center text-white text-sm"><span class="font-semibold">Not a member yet?</span> <a href="/router.php/account_level" class="underline">Join the community here!</a></p>
</div>
@endsection
