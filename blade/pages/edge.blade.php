@extends('musora-ui::layouts.vue')

@section('musora-ui::title', 'Members - Edge')

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.edge-nav')
@endsection

@section('musora-ui::app')
    @include('musora-ui::partials.user-stats')

    <div class="bg-blue-100 py-6">
        <div class="mx-auto w-full container px-3">
            @include('musora-ui::partials.next-lesson', ['nextLesson' => $nextLesson])
        </div>
    </div>

    <modal-default modal-id="skill-levels-modal">
        <template v-slot:header>What Skill Level Are You?</template>
        Skill Levels are directly tied to the Drumeo Method curriculum.  If you are on Level 4 of the Drumeo Method you should set your Skill Level to Level 4 here.
    </modal-default>

    <div class="container w-full h-full mx-auto px-3 pt-4">
        <content-row
            content-list='{{ $continueContentData }}'
            section-title="continue"
            section-url="#"
        ></content-row>

        <content-row
            content-list='{{ $newContentData }}'
            section-title="new"
            section-url="#"
        ></content-row>
    </div>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what do you want to work on?'
        :cards-per-row='4'
        preload-data='{{ $catalogueContentData }}'
        infinite-scroll
        use-edge-content-type-filters
        use-progress-filters
    ></content-catalogue>
@endsection
