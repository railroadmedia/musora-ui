<div class="absolute bottom-0 left-0 right-0 flex justify-center">
    <a href="#" id="content-info" class="flex flex-col items-center justify-center z-10 leading-none text-white" style="">
        <span class="uppercase font-bold font-roboto">info</span>
        <i class="fas fa-angle-down open"></i>
        <i class="fas fa-angle-up close"></i>
    </a>
</div>
<div id="content-info-container" class="mx-auto w-full container overflow-hidden px-3 flex flex-col">
    <h3 class="text-white text-xl font-bold uppercase py-2">About the Lesson</h3>
    @foreach ($description as $paragraph)
        <p class="text-white">{{ $paragraph }}</p>
    @endforeach
    <div class="mb-10"></div>
</div>
