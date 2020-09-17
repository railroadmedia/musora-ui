<div>
    @foreach ($lessons as $lesson)
        <div class="">
            @component('musora-ui::core.method-card', $lesson)
            @endcomponent
        </div>
    @endforeach
</div>
