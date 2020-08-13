@extends('layouts.members')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav')
@endsection

@section('content')
    @include('sections.user-stats')
    <!-- todo - remove -->

    <div class="mx-auto w-full container px-3 h-full pt-4">
        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
            <div class="large:flex-1">
            </div>
            @include('sections.slider')
        </div>
    </div>
@endsection
