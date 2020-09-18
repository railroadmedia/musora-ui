<div>
    @foreach ($lessons as $lesson)
        <div class="">
            @component('musora-ui::utilities.method-card', $lesson)
            @endcomponent
        </div>
    @endforeach
</div>
