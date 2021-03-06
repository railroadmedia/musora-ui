<a href="{{ $url ?? '/router.php/vue/content_video' }}" class="content-card">
    <div class="relative">
        <div class="rounded-lg overflow-hidden">
            <img src="{{ $thumbnail }}">
        </div>
        <div class="instructor-name absolute rounded-lg bottom-0 left-0 right-0 pt-6 pb-3 px-4 text-white uppercase text-xs font-bold font-roboto">{{ $teacherName }}</div>
        @if (!isset($hideAddIcon))
            <div class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer z-20"><i class="icon-add-to-list text-white"></i></div>
        @endif
        @if (isset($showCompleteIcon) && $showCompleteIcon)
            <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-approved-teacher text-white text-4xl"></i></div>
        @else
            <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
        @endif
    </div>
    <div class="pt-2">
        <div class="py-1 text-xs text-dark-gray uppercase flex items-center font-semibold">@if (isset($icon))<i class="{{ $icon }} text-sm mr-1"></i>@endif {{ $contentType }}</div>
        <h3 class="pb-1 font-bold capitalize">{{ $videoTitle }}</h3>
        <p class="text-xs text-medium-gray">{{ $difficulty }}</p>
    </div>
</a>
