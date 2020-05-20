<div class="w-full small:mt-6">
    <div class="flex flex-row justify-between items-center uppercase text-sm font-semibold">
        <div class="text-medium-gray">
            <span>{{ $rowTitle }}</span>
        </div>
        <div class="">
            <a href="{{ $url }}" class="text-blue-500 text-xs">see all</a>
        </div>
    </div>
    <div class="py-6 small:flex small:space-x-3">
        <!-- todo: add content for empyt video list -->

        <!-- 1st video card -->
        @isset($videos[0])
            <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
                @component('core.video-card', $videos[0])
                @endcomponent
            </div>
        @endisset

        <!-- 2nd video card -->
        @isset($videos[1])
            <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
                @component('core.video-card', $videos[1])
                @endcomponent
            </div>
        @endisset

        <!-- 3rd video card -->
        @isset($videos[2])
            <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
                @component('core.video-card', $videos[2])
                @endcomponent
            </div>
        @endisset

        <!-- 4th video card -->
        @isset($videos[3])
            <div class="w-1/2 hidden medium:block medium:w-1/4 large:w-1/5 x-large:w-1/6">
                @component('core.video-card', $videos[3])
                @endcomponent
            </div>
        @endisset

        <!-- 5th video card -->
        @isset($videos[4])
            <div class="w-1/5 hidden large:block large:w-1/5 x-large:w-1/6">
                @component('core.video-card', $videos[4])
                @endcomponent
            </div>
        @endisset

        <!-- 6th video card -->
        @isset($videos[5])
            <div class="hidden x-large:block x-large:w-1/6">
                @component('core.video-card', $videos[5])
                @endcomponent
            </div>
        @endisset
    </div>
</div>