<div class="w-full mt-6 mb-20">
    <div class="flex flex-row justify-between items-center uppercase text-sm font-semibold">
        <div class="text-medium-gray">
            <span>about brandon</span>
        </div>
        <div class="">
            <a href="#" class="text-blue-500 text-xs">edit</a>
        </div>
    </div>
    <div class="flex flex-col md:flex-row items-start justify-between mt-10">
        <div class="grid grid-cols-2 row-gap-4">
            @foreach ($aboutFields as $key => $value)
                <div class="capitalize font-extrabold">{{ $key }}</div>
                <div class="capitalize">{{ $value }}</div>
            @endforeach
        </div>
        <div class="mt-6 md:mt-0 xl:mr-48">
            <div class="md:max-w-lg lg:max-w-xl">
                <img class="rounded-lg overflow-hidden w-full h-auto" src="https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg">
            </div>
            <div class="w-3/4 mt-6 flex justify-start grid grid-cols-2 row-gap-4">
                @foreach ($userFields as $key => $value)
                    <div class="capitalize font-extrabold">{{ $key }}</div>
                    <div class="capitalize">{{ $value }}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>
