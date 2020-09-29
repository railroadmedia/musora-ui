<div class="w-full h-full" style="background-color: #191b1c;">
    <div class="mx-auto w-full container h-full relative px-3">
        <div class="text-white py-6">
            <div class="flex flex-row">
                <div class="flex-row space-x-6 hidden sm:flex">
                    <div class="space-x-2">
                        <span class="font-bold text-2xl">{{ $details['lessons'] }}</span><span class="uppercase">lessons</span>
                    </div>
                    <div class="space-x-2">
                        <span class="font-bold text-2xl">{{ $details['xp'] }}</span><span class="uppercase">xp</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 flex justify-center">
            <a href="#" id="content-info" class="flex flex-col items-center justify-center z-10 leading-none text-white" style="">
                <span class="uppercase font-bold font-roboto">info</span>
                <i class="fas fa-angle-down open"></i>
                <i class="fas fa-angle-up close"></i>
            </a>
        </div>
        <div id="content-info-container" class="text-white overflow-hidden">
            <div class="pb-10 space-y-6">
                @if(!empty($description['contentDescription']))
                    <div class="space-y-3">
                        <h3 class="font-bold text-xl uppercase">about the lesson</h3>
                        <div>{!! $description['contentDescription'] !!}</div>
                    </div>
                @endif

                @if(!empty($description['instructors']))
                    @foreach ($description['instructors'] as $instructorData)
                        <div class="space-y-3">
                            <h3 class="font-bold text-xl uppercase">About {{ $instructorData['name'] }}</h3>
                            <div>{!! $instructorData['bio'] !!}</div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>