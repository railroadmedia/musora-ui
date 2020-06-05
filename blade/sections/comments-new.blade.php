@php
$thumbnail = 'https://s3.amazonaws.com/pianote/defaults/avatar.png';
@endphp

<div class="border-t border-light-gray py-8">
    <div class="flex justify-between">
        <div>
            <span class="uppercase text-medium-gray text-sm font-semibold">{{ isset($comments) ? count($comments) : 0 }} comments</span>
        </div>
        <div>
            <span class="text-medium-gray text-sm font-semibold">Sort by:</span> <select class="bg-white text-medium-gray text-sm"><option>Newest First</option></select>
        </div>
    </div>

    <div class="flex my-8">
        <div class="rounded-full overflow-hidden border-4 border-blue-500 h-20 w-20">
            <img src="{{ $thumbnail }}" class="h-full w-aut">
        </div>
        <div class="flex-1 flex flex-col">
            <div class="ml-16 rounded-lg overflow-hidden border border-gray">
                <div class="flex space-x-4 bg-gray p-3">
                    <div class="flex divide-x divide-medium-gray border border-medium-gray rounded-lg">
                        <div class="rounded-l-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-edit text-lg"></i></div>
                        <div class="bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-info text-lg"></i></div>
                        <div class="rounded-r-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-home text-lg"></i></div>
                    </div>
                    <div class="flex divide-x divide-medium-gray border border-medium-gray rounded-lg">
                        <div class="rounded-l-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-grid text-lg"></i></div>
                        <div class="rounded-r-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-sort text-lg"></i></div>
                    </div>
                    <div class="border border-medium-gray rounded-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-notation-key text-lg"></i></div>
                </div>
                <div class="">
                    <textarea class="w-full h-full" rows="5"></textarea>
                </div>
            </div>
            <div class="pt-2 flex justify-end">
                @component('core.button', [
                    'labelText' => 'comment',
                    'type' => 'button',
                ])
                @endcomponent
            </div>
        </div>
    </div>
</div>
