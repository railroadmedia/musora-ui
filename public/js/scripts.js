// icon checkboxes
// todo - remove after updating shows_show to vue components
var iconCheckboxes = document.getElementsByClassName('icon-checkbox');
Array.from(iconCheckboxes).forEach(function (element) {
  element.addEventListener('click', function (event) {
    element.classList.toggle('checked');
    event.preventDefault();
    event.stopPropagation();
  });
}); // toggle-input

var toggleInputs = document.querySelectorAll('.toggle-input .displayed');

if (toggleInputs.length) {
  Array.from(toggleInputs).forEach(function (element) {
    element.addEventListener('click', function (event) {
      var hiddenInput = element.parentElement.querySelector('.hidden-input');

      if (hiddenInput != null) {
        hiddenInput.value = element.checked ? 1 : 0;
      }
    });
  });
} // flatpickr


var flatpickrInputs = document.querySelectorAll('.flatpickr');

if (flatpickrInputs.length) {
  var dateFormat = 'Y-m-d';
  var altFormat = 'F j, Y';
  flatpickr('.flatpickr', {
    altInput: true,
    altFormat: altFormat,
    dateFormat: dateFormat
  });
} // badge-checkbox


var badgeCheckboxElements = document.getElementsByClassName('badge-checkbox');

if (badgeCheckboxElements.length) {
  Array.from(badgeCheckboxElements).forEach(function (element) {
    element.addEventListener('click', function (event) {
      var checkbox = element.getElementsByTagName('input')[0];
      checkbox.checked = !checkbox.checked;

      if (checkbox.checked) {
        element.classList.add('active');
      } else {
        element.classList.remove('active');
      }

      event.preventDefault();
      event.stopPropagation();
    });
  });
} // menu


var sideMenu = document.getElementById('side-menu');
var overlay = document.getElementById('overlay');
var sideBar = document.getElementById('side-bar');
var searchToggleElements = document.querySelectorAll('.search-toggle');

function closeEverything(event) {
  event.stopPropagation();
  sideMenu.classList.add('open');
  sideBar.classList.remove('active');
  overlay.classList.remove('active');
}

if (sideMenu) {
  sideMenu.addEventListener('click', function (event) {
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
  Array.from(searchToggleElements).forEach(function (element) {
    element.addEventListener('click', function (event) {
      element.parentElement.classList.toggle('search-active');
      event.stopPropagation();
      event.preventDefault();
    });
  });
}

var collapseTriggers = document.querySelectorAll('.collapse-trigger');

if (collapseTriggers.length) {
  Array.from(collapseTriggers).forEach(function (element) {
    element.addEventListener('click', function (event) {
      element.classList.toggle('active');
    });
  });
} // edge-nav


var scrollSubNavRight = document.getElementById('scroll-sub-nav-right');
var scrollSubNavLeft = document.getElementById('scroll-sub-nav-left');
var subNavWrap = document.getElementById('sub-nav-wrap');
var currentSubNavScrollPosition;

function getMaximumScrollAmount() {
  var amountToScroll = subNavWrap.clientWidth;
  var subNavLinks = document.querySelectorAll('.subnav-link');
  var maximumScrollAmount = 0;

  for (var i = 0; i < subNavLinks.length; i++) {
    maximumScrollAmount += subNavLinks[i].clientWidth;
  }

  return maximumScrollAmount - amountToScroll - 2;
}

function showOrHideButtons() {
  var maximumScrollAmount = getMaximumScrollAmount();
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

function scrollSubNav() {
  var backwards = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
  var amountToScroll = subNavWrap.clientWidth;
  var positionToScrollTo = backwards ? currentSubNavScrollPosition - amountToScroll : currentSubNavScrollPosition + amountToScroll;
  subNavWrap.scrollTo({
    top: 0,
    left: positionToScrollTo,
    behavior: 'smooth'
  });
}

if (scrollSubNavRight && scrollSubNavLeft && subNavWrap) {
  document.body.addEventListener('click', function (event) {
    var element = event.target;

    if (element.getAttribute('id') === 'scroll-sub-nav-left' || element.parentElement.getAttribute('id') === 'scroll-sub-nav-left') {
      scrollSubNav(true);
    }

    if (element.getAttribute('id') === 'scroll-sub-nav-right' || element.parentElement.getAttribute('id') === 'scroll-sub-nav-right') {
      scrollSubNav();
    }
  });
  subNavWrap.addEventListener('scroll', showOrHideButtons);
  window.addEventListener('resize', function () {
    showOrHideButtons();
  });
  showOrHideButtons();
} // modals


var modalTriggers = document.querySelectorAll('.modal-trigger');

if (modalTriggers) {
  Array.from(modalTriggers).forEach(function (element) {
    element.addEventListener('click', function (event) {
      var modalId = event.target.getAttribute('data-target');
      var modalElement = document.getElementById(modalId);
      modalElement.classList.add('active');
      event.preventDefault();
      event.stopPropagation();
    });
  });
}

var modalElements = document.querySelectorAll('.modal-dialog');

if (modalElements) {
  Array.from(modalElements).forEach(function (element) {
    element.addEventListener('click', function (event) {
      element.classList.remove('active');
      event.preventDefault();
      event.stopPropagation();
    });
  });
}

var modalContainers = document.querySelectorAll('.modal-container');

if (modalContainers) {
  Array.from(modalContainers).forEach(function (element) {
    element.addEventListener('click', function (event) {
      event.stopPropagation();
    });
  });
}

var closeModalElements = document.querySelectorAll('.close-modal');

if (closeModalElements) {
  Array.from(closeModalElements).forEach(function (element) {
    element.addEventListener('click', function (event) {
      var el = element;

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

var element90DayHelp = document.getElementById('90-day-help');

if (element90DayHelp) {
  element90DayHelp.addEventListener('click', function (event) {
    document.getElementById('modal-post-90-day-cancel-letter').classList.remove('active');
    document.getElementById('modal-how-can-we-help').classList.add('active');
    event.preventDefault();
    event.stopPropagation();
  });
} // course-data


var courseInfoTrigger = document.getElementById('course-info');
var courseInfoContainer = document.getElementById('course-info-container');

if (courseInfoTrigger && courseInfoContainer) {
  courseInfoTrigger.addEventListener('click', function (event) {
    courseInfoTrigger.classList.toggle('active');
    courseInfoContainer.classList.toggle('active');
    event.preventDefault();
    event.stopPropagation();
  });
}
