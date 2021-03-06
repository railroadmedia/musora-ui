@extends('musora-ui::layouts.public')

@section('musora-ui::title', 'Create Account - Profile Name')

@section('musora-ui::content')
<div class="m-10 w-full">
    <h2 class="font-extrabold text-center uppercase mb-8">choose your display name</h2>
    <div class="text-center">
        <div class="">
            @component('musora-ui::utilities.text-input', [
                'labelText' => 'Username',
                'inputId' => 'username',
                'tabIndex' => 1,
                'theme' => 'gray',
            ])
            @endcomponent
        </div>
        <p class="text-sm py-5">This appears on your Drumeo profile and comments</p>
    </div>
    <div class="mt-4 mb-2 flex justify-center">
        @component('musora-ui::utilities.anchor-button', [
            'labelText' => 'next',
            'href' => $nextUrl,
        ])
        @endcomponent
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
                'href' => $skipUrl,
                'theme' => 'gray'
            ])
            @endcomponent
        </div>
    </div>
</div>
@endsection

