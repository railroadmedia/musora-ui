@extends('layouts.members')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    <!-- todo: add sub-nav active class support -->
    @include('sections.edge-nav')
@endsection

@section('content')
    @include('sections.user-stats')

    @include('sections.next-lesson')

    <div class="mx-auto w-full container px-3 large:px-0 h-full pt-4">
    	@include('sections.method-content')
    </div>
@endsection
