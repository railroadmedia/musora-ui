<div class="mx-auto w-full container px-3 pt-10 pb-4">
    <div class="flex justify-center sm:justify-between flex-wrap">
        @foreach ($stats as $item)
            <div class="m-2 rounded-full overflow-hidden border-4 border-light-gray flex flex-col items-center justify-center h-32 w-32 sm:h-40 sm:w-40 self-center">
                <div class="text-xl sm:text-3xl text-edge-blue"><i class="{{ $item['icon'] }} text-2xl}"></i></div>
                <div class="text-xs sm:text-sm w-24 text-center leading-none text-medium-gray uppercase">{{ $item['label'] }}</div>
                <div class="text-xl sm:text-4xl font-black text-dark-gray">{{ $item['value'] }}</div>
            </div>
        @endforeach
    </div>
</div>
