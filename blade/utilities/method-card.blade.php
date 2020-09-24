@php
    $url = $url ?? '#';
    $lessonDescription = $lessonDescription ?? '';
    if (strlen($lessonDescription) > 400 && ($truncateLessonDescription ?? true) != false) {
        $lessonDescriptionTruncated = substr($lessonDescription, 0, 400) . '...';
    } else {
        $lessonDescriptionTruncated = $lessonDescription;
    }
@endphp

<a href="{{ $url }}" class="flex flex-col sm:flex-row items-center method-card p-3">
    <div class="flex-none relative w-full sm:h-64 sm:w-64 rounded-lg overflow-hidden">
        <img src="{{ $thumbnail }}" class="object-cover object-center w-auto sm:h-full">
        <div class="bg-method-gradient absolute top-0 left-0 w-full h-full px-3 flex flex-col justify-center items-center leading-none z-10">
            <img src="https://dpwjbsxqtam5n.cloudfront.net/pack-logos/drumeo-method-logo.png" alt="Item Logo" style="max-width: 150px;">
            <p class="text-white uppercase font-extrabold text-5xl">{{ $lessonLevel }}</p>
        </div>
        <div class="method-card-icon absolute top-0 left-0 w-full h-full px-3 flex flex-col justify-center items-center leading-none z-20 invisible">
            <i class="icon-live text-3xl text-white"></i>
        </div>
    </div>
    <div class="flex flex-row pt-2 pb-4 sm:pt-0 sm:pb-0 sm:pl-6 items-center">
        <div class="w-full sm:w-3/5 leading-none">
            <div class="my-2 capitalize font-bold text-2xl">{{ $lessonTitle }}</div>
            <div class="my-2 capitalize text-xs text-medium-gray">{{ $teacherName }}</div>
            <div class="my-2 leading-relaxed text-sm text-dark-gray">{!! $lessonDescriptionTruncated !!}</div>
            <div class="text-medium-gray text-xs lg:hidden">{{ $lessonLength }} - {{ $lessonXp }} XP</div>
        </div>
        <div class="hidden sm:flex flex-row justify-end w-2/5 text-medium-gray text-xs">
            <div class="flex items-center hidden lg:block">{{ $lessonLength }}</div>
            <div class="px-10 flex items-center hidden lg:block">{{ $lessonXp }} XP</div>
            <div class="mx-4 flex items-center cursor-pointer hover:text-black"><i class="icon-add-to-list text-3xl"></i></div>
            <div class="ml-4 flex items-center cursor-pointer hover:text-black"><i class="icon-live text-3xl"></i></div>
        </div>
    </div>
</a>
