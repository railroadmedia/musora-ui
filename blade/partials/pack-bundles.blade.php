<div class="py-12">
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($bundles as $bundle)
            @component('musora-ui::utilities.pack-bundle-card', $bundle)
            @endcomponent
        @endforeach
    </div>
</div>