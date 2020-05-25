@php
    $skipCollapseStyle = $skipCollapseStyle ?? false;
    $skipCollapseScript = $skipCollapseScript ?? false;
    $active = $active ?? 'edge';
    $items = [
        [
            'title' => 'EDGE',
            'active' => $active == 'edge' ? 'active': null,
        ],
        [
            'title' => 'packs',
            'active' => $active == 'packs' ? 'active': null,
        ],
        [
            'title' => 'forums',
            'active' => $active == 'forums' ? 'active': null,
        ],
        [
            'title' => 'shop',
            'active' => $active == 'shop' ? 'active': null,
        ],
    ];
@endphp

@push('styles')
<style type="text/css">
#nav {
    height: 50px;
}

@media (min-width: 40rem) {
    #nav {
        height: 65px;
    }
}

#nav .active {
    color: #fff;
    font-weight: 700;
}

#logo {
    flex:0 0 125px;
}

@media (min-width: 40rem) {
    #logo {
        flex:0 0 175px;
    }
}

#side-menu.open #icon-open,
#side-menu:not(.open) #icon-close {
    display: inline;
}
#side-menu.open #icon-close,
#side-menu:not(.open) #icon-open {
    display: none;
}
#overlay {
    background-color: rgba(0,0,0,.6);
    transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    -webkit-transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    cursor: pointer;
}
#overlay.active {
    visibility: visible;
    opacity: 1;
}
#side-bar {
    height: calc(100% - 50px);
    top: 50px;
    width: 320px;
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    -webkit-transition: -webkit-transform .3s ease-in-out;
    transition: -webkit-transform .3s ease-in-out;
    transition: transform .3s ease-in-out;
    transition: transform .3s ease-in-out,-webkit-transform .3s ease-in-out;
    overflow-y: auto;
}
#side-bar.active {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}
#side-bar .collapse-trigger.active {
    background-color: #f2f2f2;
}
@if (!$skipCollapseStyle)
.collapse-trigger.active .collapse-trigger-open,
.collapse-trigger:not(.active) .collapse-trigger-close {
    display: none;
}
.collapse-trigger:not(.active) .collapse-trigger-open,
.collapse-trigger.active .collapse-trigger-close {
    display: inline-block;
}
.collapse-trigger.active + .collapse-container {
    max-height: 1000px;
}
.collapse-trigger:not(.active) + .collapse-container {
    max-height: 0;
}
.collapse-container {
    -webkit-transition: max-height .2s ease-in-out;
    transition: max-height .3s ease-in-out;
}
@media (min-width: 40rem) {
    .collapse-trigger.active + .collapse-container.small\:expand,
    .collapse-trigger:not(.active) + .collapse-container.small\:expand {
        max-height: 1000px;
    }
}
@endif
</style>
@endpush

<header id="nav" class="bg-header fixed w-full top-0 left-0 border-b border-header-gray z-50">
    <div class="mx-auto w-full container pl-3 small:pr-3 large:px-0 h-full">
        <div class="flex flex-row items-center h-full">
            <div class="flex">
                <a id="logo" href="#" class="max-h-full inline-block">
                    <img src="https://dpwjbsxqtam5n.cloudfront.net/logos/logo-white.png" class="w-full h-auto">
                </a>
            </div>
            <div class="w-full h-full hidden small:flex flex-row items-center inline-box text-lg capitalize text-header-gray">
                @foreach ($items as $item)
                    <a href="#" class="h-full w-1/4 flex items-center justify-center hover:text-white hover:font-bold {{ $item['active'] }}"><span>{{ $item['title'] }}</span></a>
                @endforeach
            </div>
            <div class="flex items-center pr-2 small:pr-0">
                <div class="text-header-gray mx-2"><i class="icon-search text-lg font-bold"></i></div>
                <div class="rounded-full overflow-hidden border-2 border-header-gray w-8">
                    <img src="https://musora.imgix.net/https%3A%2F%2Fs3.amazonaws.com%2Fpianote%2Fdefaults%2Favatar.png?blur=2&fit=crop&h=50&ixlib=php-1.2.1&q=50&w=50&s=0a284a726ec34f3bca2bb253a0dfc869">
                </div>
            </div>
            <div id="side-menu" class="text-header-gray px-4 border-l border-header-gray h-full small:hidden flex items-center justify-center cursor-pointer open"><i id="icon-open" class="icon-home text-lg font-bold"></i><i id="icon-close" class="icon-hammer text-lg font-bold"></i></div>
        </div>
    </div>
</header>
<div id="overlay" class="invisible fixed top-0 left-0 right-0 bottom-0 z-40 opacity-0"></div>
<aside id="side-bar" class="fixed right-0 z-50 bg-white flex flex-col">
    <a href="#" class="p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-home inline-block mr-2 text-edge-blue"></i>Home</a>
    <div class="">
        <span class="collapse-trigger p-3 border-b border-medium-gray flex flex-row items-center relative cursor-pointer"><i class="icon-live inline-block mr-2 text-edge-blue"></i>Drumeo Edge<i class="icon-learning-paths text-medium-gray absolute right-0 mr-3 collapse-trigger-open"></i><i class="icon-resources text-medium-gray absolute right-0 mr-3 collapse-trigger-close"></i></span>
        <div class="collapse-container flex flex-col overflow-hidden bg-light-gray">
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-learning-paths inline-block mr-2"></i>Learning Paths</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-courses inline-block mr-2"></i>Courses</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-shows inline-block mr-2"></i>Shows</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-headphones inline-block mr-2"></i>Songs</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-play-alongs inline-block mr-2"></i>Play-Alongs</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-drums inline-block mr-2"></i>40 Rudiments</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-student-focus inline-block mr-2"></i>Student Focus</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-live inline-block mr-2"></i>Live</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-schedule inline-block mr-2"></i>Schedule</a>
        </div>
    </div>
    <div class="">
        <span class="collapse-trigger p-3 border-b border-medium-gray flex flex-row items-center relative cursor-pointer"><i class="icon-dft inline-block mr-2 text-edge-blue"></i>Drum Shop<i class="icon-learning-paths text-medium-gray absolute right-0 mr-3 collapse-trigger-open"></i><i class="icon-resources text-medium-gray absolute right-0 mr-3 collapse-trigger-close"></i></span>
        <div class="collapse-container flex flex-col overflow-hidden bg-light-gray">
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center"></i>All products</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center">P4 Practice Pad</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center">Successful Drumming</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center">Drumming System</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center">Hi-Fidelity Ear Plugs</a>
            <a href="#" class="pl-8 p-3 border-b border-medium-gray flex flex-row items-center">Drum Sticks</a>
        </div>
    </div>
    <a href="#" class="p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-packs inline-block mr-2 text-edge-blue"></i>Packs</a>
    <a href="#" class="p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-forum inline-block mr-2 text-edge-blue"></i>Forums</a>
    <a href="#" class="p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-student inline-block mr-2 text-edge-blue"></i>My Profile</a>
</aside>

@push('scripts')
<script type="text/javascript">
const sideMenu = document.getElementById('side-menu');
const overlay = document.getElementById('overlay');
const sideBar = document.getElementById('side-bar');

function closeEverything(event) {
    event.stopPropagation();

    sideMenu.classList.add('open');
    sideBar.classList.remove('active');
    overlay.classList.remove('active');
}

sideMenu.addEventListener('click', (event) => {
    sideMenu.classList.toggle('open');

    if (sideMenu.classList.contains('open')) {
        overlay.classList.remove('active');
        sideBar.classList.remove('active');
    } else {
        overlay.classList.add('active');
        sideBar.classList.add('active');
    }
});

overlay.addEventListener('click', closeEverything);

@if (!$skipCollapseScript)
const collapseTriggers = document.querySelectorAll('.collapse-trigger');

if (collapseTriggers.length) {
    Array.from(collapseTriggers).forEach((element) => {
        element.addEventListener('click', (event) => {
            element.classList.toggle('active');
        });
    });
}
@endif
</script>
@endpush
