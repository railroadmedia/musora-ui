@push('styles')
<style type="text/css">
#sub-nav-container {
    padding-top: 65px;
}
.profile-nav-link:hover {
    background-color: #002039;
}
</style>
@endpush

@php
$items = [
    [
        'icon' => 'fas fa-tachometer-alt-slow',
        'label' => 'dashboard',
        'url' => '/router.php/profile_dashboard',
    ],
    [
        'icon' => 'icon-my-list',
        'label' => 'my list',
        'url' => '/router.php/vue/profile_my_list',
    ],
    [
        'icon' => 'icon-gear',
        'label' => 'settings',
        'url' => '/router.php/settings_profile',
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
                <a href="{{ $item['url'] }}" class="profile-nav-link h-full flex flex-col items-center justify-center px-4 sm:px-10 hover:text-white">
                    <i class="{{ $item['icon'] }} text-xl sm:text-3xl {{ $_iconClass }}"></i>
                    <span class="sm:py-1 text-sm font-medium {{ $_labelClass }}">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>
