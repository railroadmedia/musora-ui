@extends('musora-ui::layouts.members')

@section('musora-ui::title', 'Members - Course')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'courses'])
@endsection

@section('musora-ui::content')
    @include('musora-ui::partials.course-description', $courseDescription)
    @include('musora-ui::partials.course-data', $courseData)

    @include('musora-ui::partials.course-content', $courseContent)

    @include('musora-ui::partials.course-progress', $courseProgress)

    <!-- todo: course-progress sections is fixed bottom, it covers footer -->

    @include('musora-ui::partials.footer')
@endsection
