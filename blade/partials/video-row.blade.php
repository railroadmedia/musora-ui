<div class="w-full small:mt-6">
    <div class="flex flex-row justify-between items-center uppercase font-roboto">
        <div class="text-medium-gray">
            <span class="font-bold">{{ $rowTitle }}</span>
        </div>
        <div class="">
            <a href="{{ $url }}" class="text-edge-blue text-sm font-bold">see all</a>
        </div>
    </div>
    @if(empty($videos))
        <div class="py-6">
            <p>Looks like you haven't started any lessons. Once you watch a video, it will show up here for you to access later.</p>
        </div>
    @else
        <div class="py-6 small:flex small:space-x-3">
            <!-- 1st video card -->
            @isset($videos[0])
                <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
                    @component('musora-ui::utilities.video-card', $videos[0])
                    @endcomponent
                </div>
            @endisset

            <!-- 2nd video card -->
            @isset($videos[1])
                <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
                    @component('musora-ui::utilities.video-card', $videos[1])
                    @endcomponent
                </div>
            @endisset

            <!-- 3rd video card -->
            @isset($videos[2])
                <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
                    @component('musora-ui::utilities.video-card', $videos[2])
                    @endcomponent
                </div>
            @endisset

            <!-- 4th video card -->
            @isset($videos[3])
                <div class="w-1/2 hidden medium:block medium:w-1/4 large:w-1/5 x-large:w-1/6">
                    @component('musora-ui::utilities.video-card', $videos[3])
                    @endcomponent
                </div>
            @endisset

            <!-- 5th video card -->
            @isset($videos[4])
                <div class="w-1/5 hidden large:block large:w-1/5 x-large:w-1/6">
                    @component('musora-ui::utilities.video-card', $videos[4])
                    @endcomponent
                </div>
            @endisset

            <!-- 6th video card -->
            @isset($videos[5])
                <div class="hidden x-large:block x-large:w-1/6">
                    @component('musora-ui::utilities.video-card', $videos[5])
                    @endcomponent
                </div>
            @endisset
        </div>
    @endif
</div>