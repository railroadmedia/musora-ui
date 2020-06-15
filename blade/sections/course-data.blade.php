@push('styles')
<style type="text/css">
#course-info {
    transform: translate(0, 50%);
}
</style>
@endpush
<div class="w-full py-3 border-b-2 border-gray relative">
    <div class="mx-auto w-full container flex items-center px-3 h-20">
        <div class="h-full flex items-center space-x-10">
            @foreach ($stats as $stat)
                <div class="flex flex-col items-center uppercase leading-none">
                    <span class="text-sm">{{ $stat['stat'] }}</span>
                    <span class="font-extrabold text-3xl">{{ $stat['value'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="h-full flex-1 flex items-center justify-end space-x-4">
            <a href="#" class="flex items-center justify-center rounded-full border-2 w-16 h-16"><i class="icon-add-to-list text-2xl"></i></a>
            <a href="#" class="flex items-center justify-center rounded-full border-2 w-16 h-16"><i class="icon-legacy text-2xl"></i></a>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex justify-center">
        <a href="#" id="course-info" class="flex flex-col items-center justify-center z-10 bg-white h-14 w-14 rounded-full border border-gray leading-none"><span class="text-xs uppercase font-bold font-roboto">info</span><i class="icon-download"></i></a>
    </div>
</div>
