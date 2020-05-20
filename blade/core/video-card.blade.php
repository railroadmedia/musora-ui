<div>
    <div class="relative">
        <div class="rounded-lg overflow-hidden">
            <img src="{{ $thumbnail }}">
        </div>
        <h4 class="absolute bottom-0 mb-3 ml-4 text-white uppercase text-xs font-semibold">{{ $teacherName }}</h4>
    </div>
    <div class="pt-2">
        <div class="py-1 text-xs text-dark-gray uppercase flex items-center"><i class="{{ $icon }} text-sm mr-1"></i> {{ $contentType }}</div>
        <h3 class="pb-1 font-semibold">{{ $videoTitle }}</h3>
        <p class="text-xs text-medium-gray">{{ $difficulty }}</p>
    </div>
</div>
