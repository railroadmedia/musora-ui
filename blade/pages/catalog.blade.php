{{-- Variables:

$catalogSeoTitle
$activeCatalogName
$catalogTitle
$startedContentJsonData
$viewAllStartedLink
$currentUserContentLevel
$leftFilterTitle
$catalogContentJsonData

--}}

@extends('musora-ui::layouts.vue_content')

@section('musora-ui::title', $catalogSeoTitle)

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav', ['active' => $activeCatalogName])
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">{{ $catalogTitle }}</h1>

    @if(($showStartedRow ?? false) == true)
        <div class="container w-full h-full mx-auto px-3">
            <content-row
                content-list='{{ $startedContentJsonData }}'
                section-title="continue"
                section-url="{{ $viewAllStartedLink }}"
                card-text-details-top="topic"
            ></content-row>
        </div>
    @endif

    @if($lessonType == 'rudiments')
        <div class="pb-6">
            <rudiments-content
                    preload-data='{{ $catalogContentJsonData }}'
                    topics-filters-title='rudiment types'
                    infinite-scroll
            ></rudiments-content>
        </div>
    @else
        <content-catalogue
                level-selector='{{ $currentUserContentLevel }}'
                topics-filters-title='{{ $leftFilterTitle }}'
                :cards-per-row='4'
                preload-data='{{ $catalogContentJsonData }}'
                infinite-scroll
                use-courses-content-type-filters
                use-progress-filters
        ></content-catalogue>
    @endif


    @if(($showStudentPlanButton ?? false) == true)
        @include('musora-ui::partials.student-plan')
        <!-- todo - the student plan is fixed bottom, footer wont show -->
    @endif

    @include('musora-ui::partials.footer')
@endsection
