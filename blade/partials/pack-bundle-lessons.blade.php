<div class="py-12">
    @foreach ($lessons as $lesson)
        @component('musora-ui::utilities.bundle-lesson-card', $lesson)
        @endcomponent
    @endforeach
</div>
