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

.subnav-link:hover {
    background-color: #002039;
}

#sub-nav .logo-method {
    margin-top: 4px;
    height: 11px;
    background-position: 50%;
    background-repeat: no-repeat;
    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8' standalone='no'%3F%3E%3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E%3Csvg width='100%25' height='100%25' viewBox='0 0 491 98' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xml:space='preserve' xmlns:serif='http://www.serif.com/' style='fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;'%3E%3Cg transform='matrix(1.29602,0,0,1.29602,-1206.6,-385.259)'%3E%3Cpath d='M1244.24,334.79C1244.24,284.756 1170.01,284.756 1170.01,334.79C1170.01,384.928 1244.24,384.928 1244.24,334.79ZM1274.11,370.869L1246.82,370.869L1246.82,298.505L1274.11,298.505C1321.25,298.712 1321.25,370.662 1274.11,370.869ZM1127.11,370.869L1108.19,370.869L1108.19,298.505L1127.11,298.505L1127.11,324.763L1149.44,324.763L1149.44,298.505L1168.36,298.505L1168.36,370.869L1149.44,370.869L1149.44,341.82L1127.11,341.82L1127.11,370.869ZM1105.92,315.045L1088.24,315.045L1088.24,370.869L1069.94,370.869L1069.94,315.045L1052.16,315.045L1052.16,298.505L1105.92,298.505L1105.92,315.045ZM1049.68,315.045L1022.91,315.045L1022.91,325.28L1047.51,325.28L1047.51,341.717L1022.91,341.717L1022.91,354.432L1050.61,354.432L1050.61,370.869L1004.5,370.869L1004.5,298.505L1049.68,298.505L1049.68,315.045ZM949.922,370.869L931.004,370.869L931.004,298.298L937.826,298.298L966.152,329.725L994.994,298.298L1001.61,298.298L1001.61,370.869L982.692,370.869L982.692,338.615L967.289,354.742L965.221,354.742L949.922,338.615L949.922,370.869ZM1189.03,334.79C1189.03,308.739 1225.32,308.739 1225.32,334.79C1225.32,361.048 1189.03,361.048 1189.03,334.79ZM1274.11,315.355L1265.33,315.355L1265.33,354.019L1274.11,354.019C1297.17,354.018 1297.17,315.356 1274.11,315.355Z' style='fill-rule:nonzero;fill: %23445F74'/%3E%3C/g%3E%3C/svg%3E%0A");
}

#sub-nav .subnav-link:hover .logo-method {
    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8' standalone='no'%3F%3E%3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3E%3Csvg width='100%25' height='100%25' viewBox='0 0 491 98' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xml:space='preserve' xmlns:serif='http://www.serif.com/' style='fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;'%3E%3Cg transform='matrix(1.29602,0,0,1.29602,-1206.6,-385.259)'%3E%3Cpath d='M1244.24,334.79C1244.24,284.756 1170.01,284.756 1170.01,334.79C1170.01,384.928 1244.24,384.928 1244.24,334.79ZM1274.11,370.869L1246.82,370.869L1246.82,298.505L1274.11,298.505C1321.25,298.712 1321.25,370.662 1274.11,370.869ZM1127.11,370.869L1108.19,370.869L1108.19,298.505L1127.11,298.505L1127.11,324.763L1149.44,324.763L1149.44,298.505L1168.36,298.505L1168.36,370.869L1149.44,370.869L1149.44,341.82L1127.11,341.82L1127.11,370.869ZM1105.92,315.045L1088.24,315.045L1088.24,370.869L1069.94,370.869L1069.94,315.045L1052.16,315.045L1052.16,298.505L1105.92,298.505L1105.92,315.045ZM1049.68,315.045L1022.91,315.045L1022.91,325.28L1047.51,325.28L1047.51,341.717L1022.91,341.717L1022.91,354.432L1050.61,354.432L1050.61,370.869L1004.5,370.869L1004.5,298.505L1049.68,298.505L1049.68,315.045ZM949.922,370.869L931.004,370.869L931.004,298.298L937.826,298.298L966.152,329.725L994.994,298.298L1001.61,298.298L1001.61,370.869L982.692,370.869L982.692,338.615L967.289,354.742L965.221,354.742L949.922,338.615L949.922,370.869ZM1189.03,334.79C1189.03,308.739 1225.32,308.739 1225.32,334.79C1225.32,361.048 1189.03,361.048 1189.03,334.79ZM1274.11,315.355L1265.33,315.355L1265.33,354.019L1274.11,354.019C1297.17,354.018 1297.17,315.356 1274.11,315.355Z' style='fill-rule:nonzero;fill:%23fff;'/%3E%3C/g%3E%3C/svg%3E%0A");
}
</style>
@endpush

@php
$items = [
    [
        'name' => 'method',
        'label' => '',
        'labelClass' => 'logo-method',
        'icon' => 'icon-drums2',
        'url' => '/router.php/method',
    ],
    [
        'name' => 'courses',
        'label' => 'courses',
        'icon' => 'icon-courses',
        'url' => '/router.php/vue/courses',
    ],
    [
        'name' => 'shows',
        'label' => 'shows',
        'icon' => 'icon-shows',
        'url' => '/router.php/shows',
    ],
    [
        'name' => 'songs',
        'label' => 'songs',
        'icon' => 'icon-headphones',
        'url' => '/router.php/vue/songs',
    ],
    [
        'name' => 'play-alongs',
        'label' => 'play-alongs',
        'icon' => 'icon-play-alongs',
        'url' => '/router.php/vue/play_alongs',
    ],
    [
        'name' => 'student focus',
        'label' => 'student focus',
        'icon' => 'icon-student-focus',
        'url' => '/router.php/vue/student_focus',
    ],
    [
        'name' => 'rudiments',
        'label' => 'rudiments',
        'icon' => 'icon-rudiments',
        'url' => '/router.php/vue/rudiments',
    ],
    [
        'name' => 'live',
        'label' => 'live',
        'icon' => 'icon-live',
        'url' => '#',
    ],
    [
        'name' => 'schedule',
        'label' => 'schedule',
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