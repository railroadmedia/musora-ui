<div id="profile-sidenav" class="flex-1 sm:flex-none px-3 sm:px-0 flex flex-row overflow-hidden border-gray sm:border-r sm:flex-col sm:rounded-t-lg">
    @foreach ($items as $index => $item)
        @php
            $_class = 'hover:font-bold hover:bg-gray text-medium-gray sm:text-black';

            if (isset($active) && $active == $item['label']) {
                $_class = 'bg-edge-blue text-white font-bold';
            }

            if ($index) {
                $_class .= ' border-l sm:border-l-0';
            }
        @endphp
        <a
            href="{{ $item['url'] }}"
            class="flex-1 sm:flex-none justify-center sm:justify-start profile-sidenav-item hover-trans border-b border-gray flex items-center capitalize sm:pl-6 py-3 {{ $_class }}"
        >
            <i class="{{ $item['icon'] }} text-lg sm:text-base"></i>
            <div class="hidden sm:block">
                <span class="pl-2">{{ $item['label'] }}</span>
            </div>
        </a>
    @endforeach
</div>
