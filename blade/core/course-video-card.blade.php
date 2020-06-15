@push('styles')
@if (!$skipStyle)
<style type="text/css">
.video-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.video-card:hover .video-card-play {
    visibility: visible;
    opacity: 1;
}
.video-card:hover {
    background-color: #f3f9ff;
}
</style>
@endif
@endpush

<a href="#" class="flex items-center space-x-4 py-2 px-3 video-card">
    <div class="flex-none font-extrabold text-xl">{{ $index }}</div>
    <div class="flex-none rounded-lg overflow-hidden w-32 h-20 relative">
        <img src="{{ $thumbnail }}" class="object-cover object-center w-full h-auto">
        <div class="video-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
    </div>
    <div class="flex-1 font-bold capitalize text-lg">{{ $title }}</div>
    <div class="flex-none flex items-center space-x-12 text-gray">
        <div class="">{{ $length }}</div>
        <div class="">{{ $xp }}</div>
        <div class="hover:text-black"><i class="icon-add-to-list text-3xl"></i></div>
        <div class="hover:text-black"><i class="icon-live text-3xl"></i></div>
    </div>
</a>
