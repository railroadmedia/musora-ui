<div id="sub-nav-container" class="bg-header w-full border-b border-header-gray">
    <div id="sub-nav" class="mx-auto w-full container text-header-gray uppercase h-20 relative">
        <div id="sub-nav-wrap" class="overflow-hidden h-full">
            <div class="w-medium medium:w-full flex flex-row items-center text-center overflow-hidden h-full">
                @foreach ($items as $item)
                    @php
                        $_iconClass = '';
                        $_labelClass = $item['labelClass'] ?? '';

                        if (isset($active) && $active == $item['name']) {
                            $_iconClass = 'text-edge-blue';
                            $_labelClass .= ' text-white';
                        }
                    @endphp
                    <a href="{{ $item['url'] }}" class="subnav-link flex-1 py-3 small:py-3 hover:text-white h-full">
                        <i
                            class="{{ $item['icon'] }} text-3xl {{ $_iconClass }}"
                        ></i>
                        <p class="text-xs font-bold {{ $_labelClass }}">{{ $item['label'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        <div id="scroll-sub-nav-left" class="h-full flex items-center justify-center border-l border-r border-header-gray cursor-pointer absolute left-0 top-0 z-10 medium:hidden" style="width: 35px;"><span class="font-bold">&lt;</span></div>
        <div id="scroll-sub-nav-right" class="h-full flex items-center justify-center border-l border-r border-header-gray cursor-pointer absolute right-0 top-0 z-10 medium:hidden" style="width: 35px;"><span class="font-bold">&gt;</span></div>
    </div>
</div>
