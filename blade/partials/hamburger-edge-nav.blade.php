<header id="nav" class="bg-header fixed w-full top-0 left-0 border-b z-40">
    <div class="mx-auto w-full container pl-3 small:pr-3 h-full">
        <div class="flex flex-row items-end small:items-center h-full relative">
            <div class="flex pb-2 small:pb-0">
                <a id="logo" href="/router.php/vue/edge" class="max-h-full inline-block">
                    <img src="https://dpwjbsxqtam5n.cloudfront.net/logos/logo-white.png" class="w-full h-auto">
                </a>
            </div>
            <div class="w-full h-full hidden small:flex flex-row items-center inline-box text-lg capitalize text-header-gray pr-12">
                @foreach ($items as $item)
                    <a href="{{ $item['url'] }}" class="h-full w-1/4 flex items-center justify-center hover:text-white hover:font-bold {{ $item['active'] }}"><span class="{{ $item['logo'] }}">{{ $item['title'] }}</span></a>
                @endforeach
            </div>
            <div class="search-bar h-full flex items-end small:items-center absolute top-0 pl-4 pr-2 small:pl-0 small:pr-0 z-50 bg-header w-16">
                <a href="#" class="search-toggle h-full text-header-gray px-4 flex items-end small:items-center pb-2 small:pb-0"><i class="icon-search text-xl font-bold"></i></a>
                <div class="hidden search-term flex-1 pl-1 pr-4 pb-2 small:pb-0">
                    <input type="text" name="search" class="w-full text-white bg-header" placeholder="What would you like to learn?" autocomplete="off">
                </div>
                <a href="#" class="search-toggle hidden search-bar-close h-full px-4 flex items-end small:items-center text-header-gray pb-2 small:pb-0"><i class="fas fa-times text-xl font-bold"></i></a>
            </div>
            <a href="/router.php/profile_dashboard" class="h-full flex items-end small:items-center">
                <div class="rounded-full overflow-hidden border-2 border-header-gray w-8">
                    <img src="{{ $profilePictureUrl }}">
                </div>
            </a>
            <div id="side-menu" class="text-white px-4 border-l border-header-gray h-full small:hidden flex items-end small:items-center justify-center cursor-pointer open pb-2 small:pb-0"><i id="icon-open" class="fas fa-bars text-xl font-bold"></i><i id="icon-close" class="fas fa-times text-xl font-bold"></i></div>
        </div>
    </div>
</header>
<div id="overlay" class="invisible fixed top-0 left-0 right-0 bottom-0 z-30 opacity-0"></div>
<aside id="side-bar" class="fixed right-0 z-40 bg-white flex flex-col">
    <a href="#" class="p-3 border-b border-medium-gray flex flex-row items-center"><i class="icon-home inline-block mr-2 text-edge-blue"></i>Home</a>
    <div class="">
        <span class="collapse-trigger p-3 border-b border-medium-gray flex flex-row items-center relative cursor-pointer"><i class="icon-live inline-block mr-2 text-edge-blue"></i>Drumeo Edge<i class="fas fa-angle-down text-xl text-medium-gray absolute right-0 mr-3 collapse-trigger-open"></i><i class="fas fa-angle-up text-xl text-medium-gray absolute right-0 mr-3 collapse-trigger-close"></i></span>
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
        <span class="collapse-trigger p-3 border-b border-medium-gray flex flex-row items-center relative cursor-pointer"><i class="icon-dft inline-block mr-2 text-edge-blue"></i>Drum Shop<i class="fas fa-angle-down text-xl text-medium-gray absolute right-0 mr-3 collapse-trigger-open"></i><i class="fas fa-angle-up text-xl text-medium-gray absolute right-0 mr-3 collapse-trigger-close"></i></span>
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
