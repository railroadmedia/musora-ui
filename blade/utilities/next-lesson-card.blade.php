{{-- Variables:
$url
$thumbnail
$teacherName
$lessonTitle
$lessonDescriptionTruncated
$lessonLength
$lessonXp
--}}

@php
    if (strlen($lessonDescription) > 250) {
        $lessonDescriptionTruncated = substr($lessonDescription, 0, 250) . '...';
    } else {
        $lessonDescriptionTruncated = $lessonDescription;
    }
@endphp

<a href="{{ $url }}" class="next-lesson flex flex-col sm:flex-row items-center">
    <div class="flex-none relative w-full h-auto sm:h-32 sm:w-48 rounded-lg overflow-hidden">
        <img src="{{ $thumbnail }}" class="object-cover object-center w-auto sm:h-full">
        <div class="absolute bottom-0 p-3 text-white font-medium uppercase text-xs w-full bg-gray bg-next-lesson-gradient">{{ $teacherName }}</div>
        <div class="card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
    </div>
    <div class="flex flex-row pt-4 sm:pt-0 sm:pl-6 items-center">
        <div class="leading-relaxed w-full sm:w-3/5">
            <div class="uppercase text-xs text-dark-gray">your next lesson:</div>
            <div class="capitalize font-bold">{{ $lessonTitle }}</div>
            <div class="text-sm text-dark-gray">{{ $lessonDescriptionTruncated }}</div>
        </div>
        <div class="hidden sm:flex flex-row justify-end w-2/5 text-medium-gray text-xs">
            <div class="flex items-center hidden lg:block">{{ $lessonLength }}</div>
            <div class="px-10 flex items-center hidden lg:block">{{ $lessonXp }} XP</div>
            <div class="hover-trans pl-6 flex items-center hover:text-dark-gray"><i class="icon-add-to-list text-3xl"></i></div>
        </div>
    </div>
</a>
