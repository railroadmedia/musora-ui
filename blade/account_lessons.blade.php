@extends('layouts.public')

@section('title', 'Create Account - Lessons')

@push('styles')
<link
    rel="stylesheet"
    href="https://d1prhhmg8i11jr.cloudfront.net/v1.0.0/dist/icons.css"
>
@endpush

@php
$checkboxes = [
    [
        'name' => 'beats',
        'icon' => 'icon-rudiments',
        'tab' => 1
    ],
    [
        'name' => 'theory',
        'icon' => 'icon-blank-staff',
        'tab' => 2
    ],
    [
        'name' => 'fills',
        'icon' => 'icon-drums',
        'tab' => 3
    ],
    [
        'name' => 'styles',
        'icon' => 'icon-rudiments',
        'tab' => 4
    ],
    [
        'name' => 'technique',
        'icon' => 'icon-rudiments',
        'tab' => 5
    ],
    [
        'name' => 'rudiments',
        'icon' => 'icon-rudiments',
        'tab' => 6
    ],
    [
        'label' => 'ear training',
        'name' => 'ear-training',
        'icon' => 'icon-rudiments',
        'tab' => 7
    ],
    [
        'name' => 'independence',
        'icon' => 'icon-rudiments',
        'tab' => 8
    ],
    [
        'name' => 'musicality',
        'icon' => 'icon-rudiments',
        'tab' => 9
    ],
    [
        'name' => 'gear',
        'icon' => 'icon-rudiments',
        'tab' => 10
    ]
];
@endphp

@section('content')
<div class="m-10 w-full">
    <h2 class="font-extrabold text-center uppercase mb-8">what do you want to work on?</h2>
    <div class="mb-6">
        <div class="flex flex-wrap">
            @foreach ($checkboxes as $checkbox)
                <div class="w-full sm:w-1/2 sm:px-1 py-1">
                    @component('core.badge-checkbox', [
                        'labelText' => $checkbox['label'] ?? $checkbox['name'],
                        'id' => $checkbox['name'],
                        'name' => $checkbox['name'],
                        'iconClass' => $checkbox['icon'] ?? null,
                    ])
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center pt-4">
        @component('core.anchor-button', [
            'labelText' => 'next',
            'href' => '/router.php/account_profile_name',
        ])
        @endcomponent
    </div>
</div>
@endsection

@section('footer')
<div class="bg-white flex flex-wrap p-6 uppercase mt-8 lg:mt-0">
    <div class="hide lg:w-1/6"></div>
    <div class="w-full lg:w-4/6">
        <div class="rounded-full border-2 border-gray p-1 m-auto max-w-xl leading-none grid grid-cols-3">
            <a href="#" class="rounded-l-full bg-green-400 text-white py-1">
                <div class="leading-none text-2xl text-center text-green-500 pt-1 lg:pt-0">
                    <i class="icon-approved-teacher"></i>
                </div>
            </a><a href="#" class="rounded-r-full bg-green-400 text-white py-1">
                <div class="leading-none text-xs text-center">
                    <span>step 2</span><br><span class="font-semibold">choose lessons</span>
                </div>
            </a><a href="#" class="rounded-full text-gray py-1">
                <div class="leading-none text-xs text-center">
                    <span>step 3</span><br><span class="font-semibold">create profile</span>
                </div>
            </a>
        </div>
    </div>
    <div class="w-full text-center pt-6 lg:w-1/6 lg:text-right lg:pt-0">
        <div class="flex justify-end leading-none">
            @component('core.anchor-button', [
                'labelText' => 'skip',
                'href' => '#',
                'theme' => 'gray'
            ])
            @endcomponent
        </div>
    </div>
</div>
@endsection
