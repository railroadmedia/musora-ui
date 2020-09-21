@extends('musora-ui::layouts.public')

@section('musora-ui::title', 'Create Account - Lessons')

@section('musora-ui::content')
<div class="m-10 w-full">
    <h2 class="font-extrabold text-center uppercase mb-8">what do you want to work on?</h2>
    <div class="mb-6">
        <div class="flex flex-wrap">
            @foreach ($lessons as $lesson)
                <div class="w-full sm:w-1/2 sm:px-1 py-1">
                    @component('musora-ui::utilities.badge-checkbox', [
                        'labelText' => $lesson['label'] ?? $lesson['name'],
                        'id' => $lesson['name'],
                        'inputName' => $lesson['name'],
                        'iconClass' => $lesson['icon'] ?? null,
                        'tabIndex' => $lesson['tab'] ?? null,
                    ])
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center pt-4">
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
            </a><a href="#" class="rounded-r-full bg-green-400 text-white py-1">
                <div class="leading-none text-xs text-center flex flex-col font-roboto">
                    <div>step 2</div><div class="font-semibold">choose lessons</div>
                </div>
            </a><a href="#" class="rounded-full text-gray py-1">
                <div class="leading-none text-xs text-center flex flex-col font-roboto">
                    <div>step 3</div><div class="font-semibold">create profile</div>
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
