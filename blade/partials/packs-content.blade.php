<div class="py-6 grid gap-3 small:grid-cols-3 medium:grid-cols-4 large:grid-cols-5 x-large:grid-cols-6">
    @foreach ($packs as $pack)
        @component('musora-ui::utilities.pack-card', [
            'background' => $pack['background'],
            'foreground' => $pack['foreground'],
        ])
        @endcomponent
    @endforeach
</div>
