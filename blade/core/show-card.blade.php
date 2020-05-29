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

<a href="{{ $url }}" class="vide-card">
    <div class="rounded-lg overflow-hidden relative">
        <img class="" src="{{ $thumbnail }}">
        <div class="vide-card-play absolute inset-0 flex items-center justify-center invisible opacity-0 z-10">
            <i class="show-play-icon icon-live text-4xl text-white"></i>
        </div>
    </div>
</a>
