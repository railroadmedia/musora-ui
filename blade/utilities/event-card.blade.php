<a href="/router.php/vue/content_video" class="hover-trans event-card flex flex-row items-center px-3 py-2 space-x-3">
    <div class="event-month leading-none break-words uppercase p-1 bg-gray text-white font-bold invisible">{{ $month }}</div>
    <div class="event-date-thumbnail flex flex-col items-center px-2 py-1 rounded-md bg-black text-white text-xs">
        <div class="font-bold">{{ $date }}</div>
        <div>{{ $time }}</div>
    </div>
    <div class="flex-1">
        <div class="text-edge-blue text-sm uppercase">{{ $title }}</div>
        <div class="font-bold text-xs">{{ $subtitle }}</div>
    </div>
    <div class="event-col text-medium-gray text-xs uppercase">{{ $type }}</div>
    <div class="event-col text-medium-gray text-xs text-center uppercase">{{ $instructor }}</div>
    <div class="text-medium-gray text-xs uppercase">{{ $difficulty }}</div>
    <div class="cursor-pointer text-gray hover:text-medium-gray hover-trans"><i class="fal fa-plus fa-2x"></i></div>
    <div class="cursor-pointer text-gray hover:text-medium-gray hover-trans"><i class="fas fa-calendar-plus fa-2x"></i></div>
</a>
