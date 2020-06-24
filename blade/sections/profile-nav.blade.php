@push('styles')
<style type="text/css">
#sub-nav-container {
    padding-top: 65px;
}
</style>
@endpush

@php
$items = [
    [
        'icon' => 'icon-home',
        'label' => 'dashboard',
        'url' => '/router.php/profile_dashboard',
    ],
    [
        'icon' => 'icon-my-list',
        'label' => 'my list',
        'url' => '/router.php/profile_my_list',
    ],
    [
        'icon' => 'icon-gear',
        'label' => 'settings',
        'url' => '#',
    ],
];
@endphp

<div id="sub-nav-container" class="bg-header w-full border-b border-header-gray">
    <div class="mx-auto w-full container leading-none text-header-gray uppercase h-20">
        <div class="flex h-full items-center justify-center">
            @foreach ($items as $item)
                @php
                    $_iconClass = '';
                    $_labelClass = '';

                    if (isset($active) && $active == $item['label']) {
                        $_iconClass = 'text-edge-blue';
                        $_labelClass = 'text-white';
                    }
                @endphp
                <a href="{{ $item['url'] }}" class="h-full flex flex-col items-center justify-center px-4 sm:px-10">
                    <i class="{{ $item['icon'] }} text-xl sm:text-3xl {{ $_iconClass }}"></i>
                    <span class="sm:py-1 text-sm font-medium {{ $_labelClass }}">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>
