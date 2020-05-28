@push('styles')
@if (!$skipStyle)
<style type="text/css">
.vide-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.vide-card:hover .vide-card-play {
    visibility: visible;
    opacity: 1;
}
</style>
@endif
@endpush

<a href="{{ $url ?? '#' }}" class="vide-card">
    <div class="relative">
        <div class="rounded-lg overflow-hidden">
            <img src="{{ $thumbnail }}">
        </div>
        <h4 class="absolute bottom-0 mb-3 ml-4 text-white uppercase text-xs font-semibold">{{ $teacherName }}</h4>
        <div class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer z-20"><i class="icon-add-to-list text-white"></i></div>
        <div class="vide-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-2xl"></i></div>
    </div>
    <div class="pt-2">
        <div class="py-1 text-xs text-dark-gray uppercase flex items-center"><i class="{{ $icon }} text-sm mr-1"></i> {{ $contentType }}</div>
        <h3 class="pb-1 font-semibold">{{ $videoTitle }}</h3>
        <p class="text-xs text-medium-gray">{{ $difficulty }}</p>
    </div>
</a>
