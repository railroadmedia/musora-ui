@extends('musora-ui::layouts.public_vue')

@section('musora-ui::title', 'Create Account - Profile Name')

@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $musoraProfileJsPath }}"></script>
@endpush

@section('musora-ui::app')
    <div class="">
        <h2 class="font-extrabold text-center uppercase mb-8">choose your profile image</h2>
        <div class="text-center">
            <account-profile-avatar></account-profile-avatar>
            <p class="text-sm py-5">This appears on your Drumeo profile and comments</p>
        </div>
        <div class="text-center mt-4 mb-2">
            <a href="account_start.html" class="bg-blue-600 text-white py-3 px-16 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block">next</a>
        </div>
    </div>
@endsection

@section('musora-ui::footer')
<div class="bg-white flex flex-wrap p-6 uppercase mt-8 lg:mt-0">
    <div class="hide lg:w-1/6"></div>
    <div class="w-full lg:w-4/6">
        <div class="rounded-full border-2 border-gray p-1 m-auto max-w-xl leading-none grid grid-cols-3">
            <a href="#" class="rounded-l-full bg-green-400 text-white py-1">
                <div class="leading-none text-2xl text-center text-green-500 pt-1 lg:pt-0">
                    <i class="icon-approved-teacher"></i>
                </div>
            </a><a href="#" class="bg-green-400 text-white py-1">
                <div class="leading-none text-2xl text-center text-green-500 pt-1 lg:pt-0">
                    <i class="icon-approved-teacher"></i>
                </div>
            </a><a href="#" class="rounded-r-full bg-green-400 text-white py-1">
                <div class="leading-none text-xs text-center font-roboto">
                    <span>step 3</span><br><span class="font-semibold">create profile</span>
                </div>
            </a>
        </div>
    </div>
    <div class="w-full text-center pt-6 lg:w-1/6 lg:text-right lg:pt-0">
        <div class="flex justify-center lg:justify-end leading-none">
            @component('musora-ui::utilities.anchor-button', [
                'labelText' => 'skip',
                'href' => '#',
                'theme' => 'gray'
            ])
            @endcomponent
        </div>
    </div>
</div>
@endsection
