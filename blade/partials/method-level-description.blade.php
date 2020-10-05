@php
    $truncatedDesc = strlen($description) > 320 ? substr($description, 0, 320) . '...' : $description;
@endphp

<div class="bg-header w-full py-10 border-b border-header-gray">
    <div class="mx-auto w-full container flex flex-col sm:flex-row px-3 sm:space-x-10">
        <div class="course-thumbnail flex-none h-44 rounded-lg overflow-hidden">
            <img src="{{ $thumbnail }}" class="object-cover object-center w-full h-auto">
        </div>
        <div class="space-y-1 flex flex-col justify-center">
            <div class="text-edge-blue uppercase">{{ $teacher }} - {{ $difficulty }}</div>
            <div class="text-white text-3xl capitalize font-extrabold">{{ $title }}</div>
            <div class="text-white">{{ $truncatedDesc }}</div>
        </div>
    </div>
    <!-- {{ $description }} -->
</div>
