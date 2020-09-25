@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Drumeo Method')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'method'])
@endsection

@php
@endphp

@section('musora-ui::content')
    @include('musora-ui::partials.course-data', $courseData)

    @include('musora-ui::partials.course-content', $courseContent)

    @include('musora-ui::partials.course-progress', $courseProgress)

    <!-- todo: course-progress section is fixed bottom, it covers footer -->

    @include('musora-ui::partials.footer')
@endsection
