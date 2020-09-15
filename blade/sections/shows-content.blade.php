<div class="mb-10">
    <div class="py-6">
        <span class="text-medium-gray text-sm uppercase font-semibold font-roboto">all shows</span>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-3">
        @foreach ($shows as $show)
            @component('musora-ui::core.show-card', $show + ['skipStyle' => true])
            @endcomponent
        @endforeach
    </div>
</div>
