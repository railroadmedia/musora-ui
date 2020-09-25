@php
$_borderColorClass = 'border-blue-500';
$_avatarIconBgClass = 'bg-blue-500';

if (isset($author['border']) && $author['border'] == 'yellow') {
    $_borderColorClass = 'border-yellow-500';
    $_avatarIconBgClass = 'bg-yellow-500';
}
@endphp

<div class="flex max-w-full">
    <div class="flex-none relative rounded-full overflow-hidden h-20 w-20 mr-6">
        <div class="rounded-full overflow-hidden border-4 {{ $_borderColorClass }} h-20 w-20">
            <img src="{{ $author['avatar'] }}" class="h-full w-auto">
        </div>
        @if (isset($author['icon']))
            <div class="absolute bottom-0 left-0 w-full flex justify-center {{ $_avatarIconBgClass }}"><i class="icon-{{ $author['icon'] }} text-white"></i></div>
        @endif
    </div>
    <div class="flex flex-col">
        <div class="flex flex-col items-start sm:flex-row sm:items-center">
            <div class="capitalize font-semibold" style="word-break: break-all;">{{ $author['name'] }}</div>
            <div class="sm:ml-2 rounded-lg px-3 bg-medium-gray uppercase text-xs text-white">level - {{ $author['level'] }}</div>
        </div>
        <div class="my-2">{{ $comment }}</div>
        <div class="flex flex-col-reverse items-start sm:flex-row sm:items-center">
            <div class="flex">
                <a href="#" class="text-medium-gray uppercase flex items-center">
                    <i class="icon-applause mr-1"></i>
                    <span class="text-xs font-semibold">like</span>
                    @if ($likes > 0)
                        <div class="rounded-full flex items-center justify-center ml-1 w-5 h-5 bg-edge-blue text-white text-xs"><span class="leading-none">{{ $likes }}</span></div>
                    @endif
                </a>
                <a href="#" class="px-6 text-medium-gray uppercase flex items-center"><i class="icon-chat mr-1"></i><span class="text-xs font-semibold">reply</span></a>
            </div>
            <div class="mb-2 sm:mb-0 text-medium-gray uppercase text-xs">{{ $added }}</div>
        </div>
    </div>
</div>
