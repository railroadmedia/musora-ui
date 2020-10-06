@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', 'Members - Drumeo Method')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => 'method'])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.method-level-description', $courseDescription)
    @include('musora-ui::partials.course-data', $courseData)

    <method-level-catalogue preload-data='{{ $catalogueJsonData }}'></method-level-catalogue>

    @include('musora-ui::partials.lesson-progress', $courseProgress)

    <!-- todo: course-progress section is fixed bottom, it covers footer -->

    @include('musora-ui::partials.footer')
@endsection
