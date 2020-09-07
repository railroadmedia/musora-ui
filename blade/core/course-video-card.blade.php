<a href="#" class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 py-6 sm:py-2 px-3 content-card">
    <div class="flex-none font-extrabold text-xl hidden sm:block">{{ $index }}</div>
    <div class="flex-none rounded-lg overflow-hidden max-w-full sm:w-32 h-40 sm:h-20 relative">
        <img src="{{ $thumbnail }}" class="object-cover object-center w-full h-auto">
        <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
    </div>
    <div class="flex-1 flex flex-col md:flex-row">
        <div class="flex-1 font-bold capitalize sm:text-lg">{{ $title }}</div>
        <div class="flex-none flex items-center sm:space-x-4 md:space-x-12 text-gray sm:mr-4 md:mr-10">
            <div class="capitalize">{{ $length }}</div>
            <div class="uppercase">{{ $xp }}</div>
        </div>
    </div>
    <div class="flex-none hidden sm:flex items-center space-x-12 text-gray">
        <div class="hover:text-black"><i class="icon-add-to-list text-3xl"></i></div>
        <div class="hover:text-black"><i class="icon-live text-3xl"></i></div>
    </div>
</a>
