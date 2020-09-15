// icon checkboxes
// todo - remove after updating shows_show to vue components

const iconCheckboxes = document.getElementsByClassName('icon-checkbox');

Array.from(iconCheckboxes).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            element.classList.toggle('checked');

            event.preventDefault();
            event.stopPropagation();
        }
    );
});

// toggle-input
const toggleInputs = document.querySelectorAll('.toggle-input .displayed');

if (toggleInputs.length) {
    Array.from(toggleInputs).forEach((element) => {
        element.addEventListener('click', (event) => {
            const hiddenInput = element.parentElement.querySelector('.hidden-input');
            if (hiddenInput != null) {
                hiddenInput.value = element.checked ? 1 : 0;
            }
        });
    });
}

// flatpickr
const flatpickrInputs = document.querySelectorAll('.flatpickr');

if (flatpickrInputs.length) {
    let dateFormat = 'Y-m-d';
    let altFormat = 'F j, Y';
    flatpickr(
        '.flatpickr',
        {
            altInput: true,
            altFormat,
            dateFormat,
        }
    );
}

// badge-checkbox
const badgeCheckboxElements = document.getElementsByClassName('badge-checkbox');

if (badgeCheckboxElements.length) {
    Array.from(badgeCheckboxElements).forEach(function(element) {
        element.addEventListener(
            'click',
            function(event) {

                const checkbox = element.getElementsByTagName('input')[0];

                checkbox.checked = !checkbox.checked;

                if (checkbox.checked) {
                    element.classList.add('active');
                } else {
                    element.classList.remove('active');
                }

                event.preventDefault();
                event.stopPropagation();
            }
        );
    });
}