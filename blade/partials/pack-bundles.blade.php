<div class="py-12">
    <div class="grid grid-cols-4">
        @foreach ($bundles as $bundle)
            @component('musora-ui::utilities.pack-bundle-card', $bundle)
            @endcomponent
        @endforeach
    </div>
</div>