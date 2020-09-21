<div class="w-full border-b-2 border-light-gray py-4">
    <div class="mx-auto w-full container px-3 h-full flex flex-col sm:flex-row justify-between leading-none uppercase">
        <div class="flex items-center justify-center">
            <div class="rounded-full overflow-hidden border-4 border-blue-500 mr-4 h-20 sm:h-24 md:h-32">
                <img src="{{ $profilePictureUrl }}" class="h-full w-auto">
            </div>
            <a href="/router.php/profile_dashboard" class="ml-2 sm:ml-6">
                <div class="font-black capitalize text-2xl sm:text-3xl md:text-4xl">{{ $displayName }}</div>
                <div class="mt-2 text-xs text-dark-gray">drumeo member since {{ $memberSinceYear }}</div>
            </a>
        </div>
        <div class="flex items-center justify-between mt-4 sm:mt-0 text-medium-gray">
            <div class="mr-4 lg:mr-12 flex flex-col items-center">
                <span class="text-xs">xp</span>
                <p class="text-dark-gray font-extrabold text-3xl">{{ $xp }}</p>
            </div>
            <div class="ml-4 lgml-12 flex flex-col items-center">
                <span class="text-xs">drumeo method</span>
                <p class="text-dark-gray font-extrabold text-3xl">{{ $methodLevel }}</p>
            </div>
        </div>
    </div>
</div>
