@push('styles')
<style type="text/css">
.song-thumbnail {
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
}
</style>
@endpush

<div class="flex py-16">
    <div class="relative">
        <div class="song-thumbnail rounded-lg overflow-hidden w-80">
            <img src="{{ $thumbnail }}" class="w-full h-auto">
        </div>
        <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-live text-white text-6xl"></i></div>
    </div>
    <div class="flex-1 flex flex-col pl-10 justify-center">
        <div class="capitalize text-3xl font-semibold">{{ $name }}</div>
        <div class="capitalize text-dark-gray pt-2">{{ $artist }} - {{ $genre }}</div>
        <div class="py-8">
            @component('core.button', [
                'labelText' => 'play',
                'type' => 'button',
            ])
            @endcomponent
        </div>
        <div class="flex">
            <a href="#" class="text-medium-gray flex flex-col items-center pr-4"><i class="icon-applause text-xl"></i><span class="text-xs font-semibold">{{ $likes }}</span></a>
            <a href="#" class="text-medium-gray flex flex-col items-center px-4"><i class="icon-getting-started text-xl"></i><span class="text-xs uppercase font-semibold">share</span></a>
            <a href="#" class="text-medium-gray flex flex-col items-center px-4"><i class="icon-download text-xl"></i><span class="text-xs uppercase font-semibold">download</span></a>
            <a href="#" class="text-medium-gray flex flex-col items-center pl-4"><i class="icon-add-to-list text-xl"></i><span class="text-xs uppercase font-semibold">add to list</span></a>
        </div>
    </div>
</div>
