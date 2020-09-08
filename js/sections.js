// menu
const sideMenu = document.getElementById('side-menu');
const overlay = document.getElementById('overlay');
const sideBar = document.getElementById('side-bar');
const searchToggleElements = document.querySelectorAll('.search-toggle');

function closeEverything(event) {
    event.stopPropagation();

    sideMenu.classList.add('open');
    sideBar.classList.remove('active');
    overlay.classList.remove('active');
}

if (sideMenu) {
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
}

if (overlay) {
    overlay.addEventListener('click', closeEverything);
}

if (searchToggleElements.length) {
    Array.from(searchToggleElements).forEach((element) => {
        element.addEventListener('click', (event) => {
            element.parentElement.classList.toggle('search-active');
            event.stopPropagation();
            event.preventDefault();
        });
    });
}

const collapseTriggers = document.querySelectorAll('.collapse-trigger');

if (collapseTriggers.length) {
    Array.from(collapseTriggers).forEach((element) => {
        element.addEventListener('click', (event) => {
            element.classList.toggle('active');
        });
    });
}

// edge-nav
const scrollSubNavRight = document.getElementById('scroll-sub-nav-right');
const scrollSubNavLeft = document.getElementById('scroll-sub-nav-left');
const subNavWrap = document.getElementById('sub-nav-wrap');
let currentSubNavScrollPosition;

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

if (scrollSubNavRight && scrollSubNavLeft && subNavWrap) {
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
}

// modals

const modalTriggers = document.querySelectorAll('.modal-trigger');

if (modalTriggers) {
    Array.from(modalTriggers).forEach((element) => {
        element.addEventListener('click', (event) => {

            let modalId = event.target.getAttribute('data-target');
            let modalElement = document.getElementById(modalId);

            modalElement.classList.add('active');
            
            event.preventDefault();
            event.stopPropagation();
        });
    });
}

const modalElements = document.querySelectorAll('.modal-dialog');

if (modalElements) {
    Array.from(modalElements).forEach((element) => {
        element.addEventListener('click', (event) => {
            element.classList.remove('active');
            event.preventDefault();
            event.stopPropagation();
        });
    });
}

const modalContainers = document.querySelectorAll('.modal-container');

if (modalContainers) {
    Array.from(modalContainers).forEach((element) => {
        element.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    });
}

const closeModalElements = document.querySelectorAll('.close-modal');

if (closeModalElements) {
    Array.from(closeModalElements).forEach((element) => {
        element.addEventListener('click', (event) => {
            let el = element;
            while (el = el.parentElement) {
                if (el.classList.contains('modal-dialog')) {
                    el.classList.remove('active');
                    break;
                }
            }
            event.preventDefault();
            event.stopPropagation();
        });
    });
}

const element90DayHelp = document.getElementById('90-day-help');

if (element90DayHelp) {
    element90DayHelp.addEventListener(
        'click',
        function(event) {

            document.getElementById('modal-post-90-day-cancel-letter').classList.remove('active');
            document.getElementById('modal-how-can-we-help').classList.add('active');

            event.preventDefault();
            event.stopPropagation();
        }
    );
}

// course-data
const courseInfoTrigger = document.getElementById('course-info');
const courseInfoContainer = document.getElementById('course-info-container');

if (courseInfoTrigger && courseInfoContainer) {
    courseInfoTrigger.addEventListener('click', (event) => {
        courseInfoTrigger.classList.toggle('active');
        courseInfoContainer.classList.toggle('active');
        event.preventDefault();
        event.stopPropagation();
    });
}
