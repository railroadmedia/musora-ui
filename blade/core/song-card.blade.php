@push('styles')
@if (!$skipStyle)
<style type="text/css">
.song-card:hover {
    background-color: #f3f9ff;
}
.card-icon {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.song-card:hover .card-icon {
    visibility: visible;
    opacity: 1;
}
</style>
@endif
@endpush

@php
$url = $url ?? '#';
$progress = $progress ?? 0;
$_iconContainerClasses = 'invisible opacity-0';
$_icon = 'live';

if ($progress == 100) {
    $_iconContainerClasses = '';
    $_icon = 'check';
} else if ($progress > 0) {
    $_iconContainerClasses = '';
    $_icon = 'clock';
}
@endphp

<a href="{{ $url }}" class="song-card flex space-x-3 ">
    <div class="relative">
        <div class="rounded-lg overflow-hidden w-16">
            <img src="{{ $thumbnail }}" class="w-full h-auto">
        </div>
        <div class="rounded-lg overflow-hidden card-icon absolute inset-0 flex items-center justify-center z-10 {{ $_iconContainerClasses }}"><i class="icon-{{ $_icon }} text-2xl text-white"></i></div>
        @if ($progress > 0)
        <div class="absolute rounded-b-lg overflow-hidden bottom-0 left-0 w-full h-4 flex items-end z-20">
            <div class="h-1 bg-edge-blue" style="width: {{ $progress }}%;"></div>
        </div>
        @endif
    </div>
    <div class="flex flex-col justify-center">
        <div class="capitalize text-sm font-medium">{{ $title }}</div>
        <div class="capitalize text-xs text-medium-gray"><span>{{ $artist }}</span> - <span>{{ $genre }}</span></div>
    </div>
</a>
