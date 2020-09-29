<a href="{{ $url ?? '#' }}">
    <div class="h-80">
        <div class="pack-card h-full rounded-lg overflow-hidden relative cursor-pointer" style="background-image:url({{ $background }});">
            <div class="absolute pack-card-icon">
                <i class="pack-card-icon icon-live text-6xl text-white"></i>
            </div>
            <div class="absolute bottom-0 pb-8 px-6 w-full">
                <img src="{{ $foreground }}">
            </div>
        </div>
    </div>
</a>
