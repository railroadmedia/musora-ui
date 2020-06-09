@php
    $percent = $percent ?? 0;
    $_percentWidth = $percent > 20 ? $percent : 20;
@endphp

<div class="bg-edge-blue fixed bottom-0 w-full py-6 z-50">
    <div class="mx-auto w-full container flex flex-col items-strech sm:flex-row sm:items-center space-y-8 sm:space-y-0 sm:space-x-6 px-3">
        <div class="flex-1 px-3 sm:px-0">
            <div class="w-full h-12 rounded-full bg-blue-800">
                <div class="h-full rounded-full border-4 border-blue-800 bg-white flex items-center justify-end px-2 sm:px-4 text-edge-blue font-semibold" style="width: {{ $_percentWidth }}%;">{{ $percent }}%</div>
            </div>
        </div>
        <div class="flex-none self-center">
            @component('core.anchor-button', [
                'labelText' => 'complete & next',
                'theme' => 'reversed',
                'href' => $nextUrl,
            ])
            @endcomponent
        </div>
    </div>
</div>
