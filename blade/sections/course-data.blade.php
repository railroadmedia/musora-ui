@push('styles')
<style type="text/css">
#course-info {
    transform: translate(0, 50%);
}
#course-info.active .icon-open,
#course-info:not(.active) .icon-close {
    display:none;
}
#course-info.active .icon-close,
#course-info:not(.active) .icon-open {
    display:block;
}
#course-info-container {
    -webkit-transition: max-height .5s ease-in-out;
    transition: max-height .5s ease-in-out;
    max-height: 1000px;
}
#course-info-container:not(.active) {
    max-height: 0;
}
</style>
@endpush

<div class="course-data w-full py-3 border-b-2 border-gray relative">
    <div class="mx-auto w-full container flex flex-col sm:flex-row items-center px-3 pb-4 sm:pb-0 sm:h-20">
        <div class="h-full flex items-center space-x-10">
            @foreach ($data as $stat)
                <div class="flex flex-col items-center uppercase leading-none">
                    <span class="text-sm">{{ $stat['stat'] }}</span>
                    <span class="font-extrabold text-3xl">{{ $stat['value'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="h-full mt-4 sm:mt-0 flex-1 flex items-center sm:justify-end space-x-4">
            <a href="#" class="flex items-center justify-center rounded-full border-2 w-16 h-16"><i class="icon-add-to-list text-2xl"></i></a>
            <a href="#" class="flex items-center justify-center rounded-full border-2 w-16 h-16"><i class="icon-legacy text-2xl"></i></a>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex justify-center">
        <a href="#" id="course-info" class="flex flex-col items-center justify-center z-10 bg-white h-14 w-14 rounded-full border border-gray leading-none"><span class="text-xs uppercase font-bold font-roboto">info</span><i class="icon-download icon-open"></i><i class="icon-check icon-close"></i></a>
    </div>
    <div id="course-info-container" class="mx-auto w-full container overflow-hidden px-3 flex flex-col">
        @foreach ($description as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
        <div class="mb-10"></div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
const courseInfoTrigger = document.getElementById('course-info');
const courseInfoContainer = document.getElementById('course-info-container');

courseInfoTrigger.addEventListener('click', (event) => {
    courseInfoTrigger.classList.toggle('active');
    courseInfoContainer.classList.toggle('active');
    event.preventDefault();
    event.stopPropagation();
});
</script>
@endpush