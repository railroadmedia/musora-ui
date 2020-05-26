@php
    if (strlen($lessonDescription) > 250) {
        $lessonDescriptionTruncated = substr($lessonDescription, 0, 250) . '...';
    } else {
        $lessonDescriptionTruncated = $lessonDescription;
    }
@endphp

@push('styles')
<style type="text/css">
.bg-next-lesson-gradient {
    background: -webkit-gradient(linear,left top,left bottom,from(transparent),to(rgba(85, 85, 85, .75)));
    background: linear-gradient(180deg,transparent 0,rgba(85, 85, 85, .75));
}
</style>
@endpush

<div class="flex flex-row">
    <div class="flex-none relative w-48 rounded-lg overflow-hidden">
        <img src="{{ $thumbnail }}" class="object-cover object-center h-full w-auto">
        <div class="absolute bottom-0 p-3 text-white font-medium uppercase text-xs w-full bg-gray bg-next-lesson-gradient">{{ $teacherName }}</div>
    </div>
    <div class="flex flex-row pl-6 items-center">
        <div class="leading-relaxed w-3/5">
            <div class="uppercase text-xs text-dark-gray">your next lesson:</div>
            <div class="capitalize font-bold">{{ $lessonTitle }}</div>
            <div class="text-sm text-dark-gray">{{ $lessonDescriptionTruncated }}</div>
        </div>
        <div class="flex flex-row justify-end w-2/5 text-medium-gray text-xs">
            <div class="flex items-center">{{ $lessonLength }}</div>
            <div class="px-10 flex items-center">{{ $lessonXp }} XP</div>
            <div class="pl-6 flex items-center"><i class="icon-add-to-list text-3xl"></i></div>
        </div>
    </div>
</div>
