@extends('layouts.members')

@section('title', 'Members - Profile My List')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'my list'])
@endsection

@php
$lists = [
    ['name' => 'my list', 'tab' => 1, 'active' => true],
    ['name' => 'in progress', 'tab' => 2],
    ['name' => 'complete', 'tab' => 3],
];

$filters = [
    
];
@endphp

@section('content')
    <div class="mx-auto w-full container px-3 h-full pt-4">
        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                @include(
                    'sections.badge-checkboxes-group',
                    [
                        'checkboxes' => $lists,
                        'skipCollapseStyle' => true,
                        'skipCollapseScript' => true,
                        'title' => 'choose your list',
                    ]
                )
            </div>
        </div>
    </div>

    @include(
        'sections.my-list-content',
        [
            'filters' => $filters,
            'videos' => $sectionVideos,
        ]
    )
@endsection
