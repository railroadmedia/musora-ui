@php
    $_innerPercent = 'hidden';
    $_outerPercent = '';
    $_widthPercent = ($percent >= 20) ? $percent : 20;

    if ($percent >= 30) {
        $_innerPercent = '';
        $_outerPercent = 'hidden';
        $_widthPercent = $percent;
    }
@endphp

@push('styles')
<style type="text/css">
#lesson-progress-inner {
    height: 120px;
}
@media (min-width: 40rem) {
    #lesson-progress-inner {
        height: 54px;
    }
}
</style>
@endpush

<div class="bg-edge-blue fixed bottom-0 w-full py-4 z-50">
    <div class="mx-auto w-full sm:h-full container flex lg:px-3">
        <div class="w-full flex flex-col lg:flex-row items-center">
            <div class="flex-none lg:mr-6 font-extrabold text-3xl text-white uppercase my-1">level {{ $level }}</div>
            <div id="lesson-progress-inner" class="w-full h-full px-3 lg:px-0 lg:flex-1">
                <div class="flex h-full items-center flex-col sm:flex-row">
                    <div class="w-full sm:flex-1 h-full rounded-full flex items-center relative">
                        <div class="absolute bg-blue-800 h-full w-full border-4 rounded-full border-edge-blue">
                            <div class="h-full flex items-center justify-end text-edge-blue font-semibold">
                                <i class="icon-applause text-lg"></i><span class="px-2 text-xs">{{ $xp }} XP</span>
                            </div>
                        </div>
                        <div class="absolute h-full w-full border-4 rounded-full border-edge-blue inline-block flex items-center" style="width: calc(100% - 90px);">
                            <div class="h-full flex items-center justify-end border-6 rounded-full border-blue-800 bg-white" style="width: {{ $_widthPercent }}%;">
                                <span class="pr-2 sm:pr-4 text-edge-blue font-semibold {{ $_innerPercent }}">{{ $percent }}%</span>
                            </div>
                            <span class="pr-4 text-edge-blue font-semibold {{ $_outerPercent }}">{{ $percent }}%</span>
                        </div>
                    </div>
                    <div class="flex-none mt-6 mb-4 sm:my-0 sm:ml-4">
                        @component('core.anchor-button', [
                            'labelText' => 'next lesson',
                            'theme' => 'reversed',
                            'href' => '#',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
