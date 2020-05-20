@push('styles')
<style type="text/css">
#sub-nav-container {
    padding-top: 50px;
}

@media (min-width: 40rem) {
    #sub-nav-container {
        padding-top: 65px;
    }
}

#sub-nav {
    padding: 0 35px;
}

@media (min-width: 64rem) {
    #sub-nav {
        padding: 0;
    }
}
</style>
@endpush

<div id="sub-nav-container" class="bg-header w-full border-b border-header-gray">
    <div id="sub-nav" class="mx-auto w-full container leading-none text-header-gray uppercase h-14 small:h-16 relative">
        <div id="sub-nav-wrap" class="overflow-x-auto">
            <div class="w-medium medium:w-full flex flex-row items-center text-center overflow-x-auto">
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-drums2 text-lg font-bold"></i>
                    <p class="text-xs font-semibold">method</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-courses text-lg"></i>
                    <p class="text-xs font-semibold">courses</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-shows text-lg"></i>
                    <p class="text-xs font-semibold">shows</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-songs text-lg"></i>
                    <p class="text-xs font-semibold">songs</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-play-alongs text-lg"></i>
                    <p class="text-xs font-semibold">play-alongs</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-student-focus text-lg"></i>
                    <p class="text-xs font-semibold">student focus</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-rudiments text-lg"></i>
                    <p class="text-xs font-semibold">rudiments</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-live text-lg"></i>
                    <p class="text-xs font-semibold">live</p>
                </a>
                <a href="#" class="subnav-link flex-1 py-3 small:py-4 hover:bg-header-gray hover:text-white">
                    <i class="icon-schedule text-lg"></i>
                    <p class="text-xs font-semibold">schedule</p>
                </a>
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