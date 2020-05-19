@extends('layouts.public')

@section('title', 'Login')

@section('content')
<div class="m-10 w-full">
    <div class="mb-2">
        @component('core.text-input', [
            'labelText' => 'Email Address',
            'inputId' => 'login-email',
            'tabIndex' => 1,
            'theme' => 'gray',
        ])
        @endcomponent
    </div>
    <div class="mb-2">
        @component('core.text-input', [
            'labelText' => 'Password',
            'inputId' => 'login-password',
            'type' => 'password',
            'tabIndex' => 2,
            'theme' => 'gray',
        ])
        @endcomponent
    </div>
    <div class="my-2">
        @component('core.button', [
            'labelText' => 'sign in',
            'type' => 'submit',
            'tabIndex' => 3,
        ])
        @endcomponent
    </div>
    <div class="mt-6">
        <a href="/router.php/reset" class="w-full text-center text-gray-500 text-sm inline-block focus:outline-none focus:shadow-outline">Forgot your password?</a>
    </div>
</div>
@endsection

@section('pitch')
<div class="pt-8">
    <p class="text-center text-white text-sm"><span class="font-semibold">Not a member yet?</span> <a href="/router.php/account_level" class="underline">Join the community here!</a></p>
</div>
@endsection
