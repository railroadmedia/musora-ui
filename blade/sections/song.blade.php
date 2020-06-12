@push('styles')
<style type="text/css">
.song-thumbnail {
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
}
</style>
@endpush

<div class="flex flex-col sm:flex-row py-16">
    <div class="relative">
        <div class="song-thumbnail rounded-lg overflow-hidden w-full sm:w-80">
            <img src="{{ $thumbnail }}" class="w-full h-auto">
        </div>
        <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-live text-white text-6xl"></i></div>
    </div>
    <div class="flex-1 flex flex-col pt-6 sm:pt-0 sm:pl-10 sm:justify-center">
        <div class="capitalize text-3xl font-semibold text-center sm:text-left">{{ $name }}</div>
        <div class="capitalize text-dark-gray pt-2 text-center sm:text-left">{{ $artist }} - {{ $genre }}</div>
        <div class="py-8 text-center sm:text-left">
            @component('core.button', [
                'labelText' => 'play',
                'type' => 'button',
                'iconClass' => 'icon-live',
            ])
            @endcomponent
        </div>
        <div class="grid grid-cols-2 row-gap-6 md:flex md:space-x-8">
            <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-applause text-xl"></i><span class="text-xs font-semibold">{{ $likes }}</span></a>
            <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-getting-started text-xl"></i><span class="text-xs uppercase font-semibold">share</span></a>
            <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-download text-xl"></i><span class="text-xs uppercase font-semibold">download</span></a>
            <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-add-to-list text-xl"></i><span class="text-xs uppercase font-semibold">add to list</span></a>
        </div>
    </div>
</div>
