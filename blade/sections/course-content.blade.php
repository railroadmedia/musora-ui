<div class="mx-auto w-full container h-full pt-8 pb-32">
    @foreach ($videos as $video)
        @component('core.course-video-card', $video)
        @endcomponent
    @endforeach
</div>
