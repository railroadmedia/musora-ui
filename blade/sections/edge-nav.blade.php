@push('styles')
<style type="text/css">
#sub-nav-container {
    padding-top: 65px;
}

#sub-nav {
    padding: 0 35px;
}

@media (min-width: 64rem) {
    #sub-nav {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
}
</style>
@endpush

@php
$items = [
    [
        'name' => 'method',
        'icon' => 'icon-drums2',
        'url' => '/router.php/method',
    ],
    [
        'name' => 'courses',
        'icon' => 'icon-courses',
        'url' => '/router.php/vue/courses',
    ],
    [
        'name' => 'shows',
        'icon' => 'icon-shows',
        'url' => '/router.php/shows',
    ],
    [
        'name' => 'songs',
        'icon' => 'icon-headphones',
        'url' => '/router.php/vue/songs',
    ],
    [
        'name' => 'play-alongs',
        'icon' => 'icon-play-alongs',
        'url' => '/router.php/vue/play_alongs',
    ],
    [
        'name' => 'student focus',
        'icon' => 'icon-student-focus',
        'url' => '/router.php/vue/student_focus',
    ],
    [
        'name' => 'rudiments',
        'icon' => 'icon-rudiments',
        'url' => '/router.php/vue/rudiments',
    ],
    [
        'name' => 'live',
        'icon' => 'icon-live',
        'url' => '#',
    ],
    [
        'name' => 'schedule',
        'icon' => 'icon-schedule',
        'url' => '#',
    ],
];
@endphp

<div id="sub-nav-container" class="bg-header w-full border-b border-header-gray">
    <div id="sub-nav" class="mx-auto w-full container text-header-gray uppercase h-20 relative">
        <div id="sub-nav-wrap" class="overflow-hidden h-full">
            <div class="w-medium medium:w-full flex flex-row items-center text-center overflow-hidden h-full">
                @foreach ($items as $item)
                    @php
                        $_iconClass = '';
                        $_labelClass = '';

                        if (isset($active) && $active == $item['name']) {
                            $_iconClass = 'text-edge-blue';
                            $_labelClass = 'text-white';
                        }
                    @endphp
                    <a href="{{ $item['url'] }}" class="subnav-link flex-1 py-3 small:py-3 hover:bg-header-gray hover:text-white h-full">
                        <i
                            class="{{ $item['icon'] }} text-3xl {{ $_iconClass }}"
                        ></i>
                        <p class="text-xs font-bold {{ $_labelClass }}">{{ $item['name'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        <div id="scroll-sub-nav-left" class="h-full flex items-center justify-center border-l border-r border-header-gray cursor-pointer absolute left-0 top-0 z-10 medium:hidden" style="width: 35px;"><span>&lt;</span></div>
        <div id="scroll-sub-nav-right" class="h-full flex items-center justify-center border-l border-r border-header-gray cursor-pointer absolute right-0 top-0 z-10 medium:hidden" style="width: 35px;"><span>&gt;</span></div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
const scrollSubNavRight = document.getElementById('scroll-sub-nav-right');
const scrollSubNavLeft = document.getElementById('scroll-sub-nav-left');
const subNavWrap = document.getElementById('sub-nav-wrap');

function getMaximumScrollAmount() {
    const amountToScroll = subNavWrap.clientWidth;
    const subNavLinks = document.querySelectorAll('.subnav-link');
    let maximumScrollAmount = 0;

    for (let i = 0; i < subNavLinks.length; i++) {
        maximumScrollAmount += subNavLinks[i].clientWidth;
    }

    return maximumScrollAmount - amountToScroll -2;
}

function showOrHideButtons() {
    const maximumScrollAmount = getMaximumScrollAmount();

    currentSubNavScrollPosition = subNavWrap.scrollLeft;

    if (currentSubNavScrollPosition <= 0) {
        currentSubNavScrollPosition = 0;
        scrollSubNavLeft.classList.add('hidden');
    } else {
        scrollSubNavLeft.classList.remove('hidden');
    }

    if (currentSubNavScrollPosition >= maximumScrollAmount) {
        currentSubNavScrollPosition = maximumScrollAmount;
        scrollSubNavRight.classList.add('hidden');
    } else {
        scrollSubNavRight.classList.remove('hidden');
    }
}

function scrollSubNav(backwards = false) {
    const amountToScroll = subNavWrap.clientWidth;
    const positionToScrollTo = backwards ? currentSubNavScrollPosition - amountToScroll : currentSubNavScrollPosition + amountToScroll;

    subNavWrap.scrollTo({
        top: 0,
        left: positionToScrollTo,
        behavior: 'smooth',
    });
}

document.body.addEventListener('click', (event) => {
    const element = event.target;

    if (element.getAttribute('id') === 'scroll-sub-nav-left' || element.parentElement.getAttribute('id') === 'scroll-sub-nav-left') {
        scrollSubNav(true);
    }

    if (element.getAttribute('id') === 'scroll-sub-nav-right' || element.parentElement.getAttribute('id') === 'scroll-sub-nav-right') {
        scrollSubNav();
    }
});

subNavWrap.addEventListener('scroll', showOrHideButtons);

window.addEventListener('resize', () => {
    showOrHideButtons();
});

showOrHideButtons();
</script>
@endpush