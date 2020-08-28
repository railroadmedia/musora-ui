@push('styles')
<style type="text/css">
#profile-sidenav {
    width: 275px;
}
.profile-sidenav-item i {
    flex-basis: 20px;
}
</style>
@endpush

@php
$items = [
    [
        'icon' => 'fas fa-edit',
        'label' => 'profile',
        'url' => '/router.php/settings_profile',
    ],
    [
        'icon' => 'fas fa-lock',
        'label' => 'login credentials',
        'url' => '/router.php/settings_login_credentials',
    ],
    [
        'icon' => 'far fa-credit-card',
        'label' => 'payments',
        'url' => '/router.php/vue/settings_payments',
    ],
    [
        'icon' => 'fas fa-bell',
        'label' => 'settings',
        'url' => '/router.php/settings_setup',
    ],
    [
        'icon' => 'fas fa-calendar-alt',
        'label' => 'account details',
        'url' => '/router.php/settings_details',
    ],
];
@endphp

<div id="profile-sidenav" class="flex flex-col rounded-t-lg overflow-hidden border-r border-gray">
    @foreach ($items as $item)
        @php
            $_class = 'hover:font-bold hover:bg-gray';

            if (isset($active) && $active == $item['label']) {
                $_class = 'bg-edge-blue text-white font-bold';
            }
        @endphp
        <a
            href="{{ $item['url'] }}"
            class="profile-sidenav-item hover-trans border-b border-gray flex items-center capitalize pl-6 py-3 {{ $_class }}"
        >
            <i class="{{ $item['icon'] }}"></i>
            <span class="pl-2">{{ $item['label'] }}</span>
        </a>
    @endforeach
</div>
