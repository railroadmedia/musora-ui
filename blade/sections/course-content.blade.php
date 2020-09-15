<div class="mx-auto w-full container h-full pt-8 pb-40 sm:pb-32">
    @foreach ($videos as $video)
        @component('musora-ui::core.course-video-card', $video)
        @endcomponent
    @endforeach
</div>
