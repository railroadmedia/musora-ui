
<div class="w-full border-b-2 border-light-gray py-4">
    <div class="mx-auto w-full container px-3 h-full flex flex-col medium:flex-row text-center leading-none uppercase">
        <a href="/router.php/profile_dashboard" class="w-full medium:w-1/3 large:w-1/2 flex items-center">
            <div class="rounded-full overflow-hidden border-3 border-edge-blue mr-4 w-20 small:h-20">
                <img src="{{ $profilePictureUrl }}" class="w-full h-auto small:h-full small:w-auto">
            </div>
            <p class="font-extrabold capitalize text-3xl">{{ $displayName }}</p>
        </a>
        <div class="w-full medium:w-2/3 large:w-1/2 pt-4 medium:pt-0 flex items-center justify-between text-dark-gray flex flex-wrap small:flex-no-wrap">
            @foreach ($stats as $item)
                <div class="mb-4 small:mb-0 w-1/2 small:w-full">
                    <span class="text-xs">{{ $item['label'] }}</span>
                    <p class="text-dark-gray font-extrabold text-3xl">{{ $item['value'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
