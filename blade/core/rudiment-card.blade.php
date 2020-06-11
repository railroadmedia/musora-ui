<a href="#" class="rudiment-card flex flex-row items-center px-3 py-1">
    <div class="w-32 rounded-lg overflow-hidden relative">
        <img src="{{ $thumbnail }}" class="object-cover object-center w-full h-auto">
        <div class="absolute bottom-0 left-0 rudiment-card-teacher-gradient text-white pl-2 pb-1 uppercase text-xs font-bold">{{ $teacherName }}</div>
        <div class="rudiment-card-play absolute inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-2xl text-white"></i></div>
    </div>
    <div class="flex items-center w-full">
        <div class="flex-1 pl-4 capitalize font-bold">{{ $title }}</div>
        <div class="flex-none h-16 px-8 hidden small:block">
            <img src="{{ $sheet }}" class="h-full w-auto">
        </div>
        <div class="flex-none"><i class="rudiment-card-icon icon-add-to-list text-2xl cursor-pointer text-medium-gray hover:text-black"></i></div>
    </div>
</a>
