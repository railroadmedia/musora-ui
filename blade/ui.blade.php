<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UI</title>

    <!-- todo: use non-branded css -->
    <link rel="stylesheet" href="/build/drumeo/drumeo.css">

    <link
        rel="stylesheet"
        href="https://d1prhhmg8i11jr.cloudfront.net/v1.0.0/dist/icons.css"
    >
</head>
<body class="box-border">

<div class="grid grid-cols-3">
    <div class="flex flex-col h-screen p-5">

        <!--    Text Inputs    -->
        <h3 class="text-xl mb-5 pl-1">Text Inputs</h3>

        {{-- Regular --}}
        <div class="mb-5">
            @component('core.text-input', [
                'labelText' => 'Regular Gray Style Text Input Placeholder',
                'theme' => 'gray',
            ])
            @endcomponent
        </div>
        <div class="mb-5">
            @component('core.text-input', [
                'labelText' => 'Regular Wire Style Text Input Placeholder',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>

        {{-- Focus --}}
        <div class="mb-5">
            @component('core.text-input', [
                'labelText' => 'Regular Text Input',
                'inputValue' => 'A focused text input.',
                'forceFocus' => true
            ])
            @endcomponent
        </div>
        <div class="mb-5">
            @component('core.text-input', [
                'labelText' => 'Regular Text Input',
                'inputValue' => 'A focused text input.',
                'forceFocus' => true,
                'theme' => 'wire',
            ])
            @endcomponent
        </div>

        {{-- Validation Error --}}
        <div class="mb-5">
            @component('core.text-input', [
               'labelText' => 'Empty Error Text Input Placeholder',
               'validationErrorText' => 'This input is required.',
               'inputValue' => ''
            ])
            @endcomponent
        </div>

        <div class="mb-5">
            @component('core.text-input', [
                'labelText' => 'Error Text Input',
                'validationErrorText' => 'Error the input is incorrect, try again.',
                'inputValue' => 'Invalid text input.'
            ])
            @endcomponent
        </div>

        <div class="mb-5">
            @component('core.text-input', [
               'labelText' => 'Empty Error Text Input Placeholder',
               'validationErrorText' => 'This input is required.',
               'theme' => 'wire'
            ])
            @endcomponent
        </div>


        <!--    Text Areas    -->
        <h3 class="text-xl mb-5 pl-1">Text Areas</h3>

        <!--    Regular    -->
        <div class="relative mb-5">
            <div class="bg-light-gray w-full rounded-lg p-2 pl-3 pr-3 pb-1 pt-4 focus-within:shadow-outline">
            <textarea
                    class="w-full h-full floating-label bg-light-gray focus:outline-none"
                    id="textarea-input"
                    placeholder=" "></textarea>
                <label for="textarea-input" class="absolute text-medium-gray left-0 hover:cursor-text">Textarea
                    Input</label>
            </div>
        </div>

        <!--    Focus    -->
        <div class="relative mb-5">
            <div class="bg-light-gray w-full rounded-lg p-2 pl-3 pr-3 pb-1 pt-4 shadow-outline show-focused">
            <textarea
                    class="w-full h-full floating-label bg-light-gray focus:outline-none show-focused"
                    id="textarea-input-focus"
                    placeholder=" ">A focused text area input.</textarea>
                <label for="textarea-input-focus" class="absolute text-medium-gray left-0 hover:cursor-text">Focus
                    Textarea
                    Input</label>
            </div>
        </div>

        <!--    Focus Many Lines    -->
        <div class="relative mb-5">
            <div class="bg-light-gray w-full rounded-lg p-2 pl-3 pr-3 pb-1 pt-4 shadow-outline">
                <textarea
                        class="w-full h-full floating-label bg-light-gray focus:outline-none show-focused"
                        id="textarea-input-focus-newlines"
                        placeholder=" ">A focused text area input. A focused text area input. A focused text area input. A focused text area input. A focused text area input. A focused text area input. A focused text area input. A focused text area input. A focused text area input. A focused text area input.</textarea>
                <label for="textarea-input-focus-newlines" class="absolute text-medium-gray left-0 hover:cursor-text">Focus
                    Textarea
                    Input</label>
            </div>
        </div>

        <!--    Error    -->
        <div class="relative mb-5">
            <div class="bg-light-gray w-full rounded-lg p-2 pl-3 pr-3 pb-1 pt-4 shadow-outline validation-error">
                <textarea
                        class="w-full h-full floating-label bg-light-gray focus:outline-none"
                        id="textarea-input-error"
                        placeholder=" ">A error text area input.</textarea>
                <label for="textarea-input-error" class="absolute text-medium-gray left-0 hover:cursor-text">Focus
                    Textarea
                    Input</label>

            </div>
            <p class="text-validation-red text-xs italic font-bold mt-2 ml-2">Error the input is incorrect, try
                again.</p>
        </div>
    </div>

    <div class="flex flex-col h-screen p-5">
        <h3 class="text-xl mb-5 pl-1">Selectors</h3>

        <!--    Regular    -->
        <div class="relative mb-5">
            <select
                    class="w-full floating-label bg-transparent focus:outline-none bg-light-gray w-full rounded-full p-2 pl-5 pt-4 pb-2 focus-within:shadow-outline border-transparent border-r-16 hover:cursor-pointer"
                    id="selector-input">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
            </select>
            <label for="selector-input" class="absolute text-medium-gray hover:cursor-pointer">Selector</label>
        </div>

        <!--    Focus    -->
        <div class="relative mb-5">
            <select
                    class="w-full floating-label bg-transparent focus:outline-none bg-light-gray w-full rounded-full p-2 pl-5 pt-4 pb-1 shadow-outline border-transparent border-r-16 hover:cursor-pointer show-focused"
                    id="selector-input-focus">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
            </select>
            <label for="selector-input-focus" class="absolute text-medium-gray hover:cursor-pointer">Selector</label>
        </div>

        <!--    Error    -->
        <div class="relative mb-5">
            <select
                    class="w-full floating-label bg-transparent focus:outline-none bg-light-gray w-full rounded-full p-2 pl-5 pt-4 pb-1 focus:outline-none border-transparent border-r-16 hover:cursor-pointer validation-error"
                    id="selector-input-error">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
            </select>
            <label for="selector-input-error" class="absolute text-medium-gray hover:cursor-pointer">Selector</label>
            <p class="text-validation-red text-xs italic font-bold mt-2 ml-2">Error the input is incorrect, try
                again.</p>
        </div>

        <h3 class="text-xl mb-5 pl-1">Checkboxes</h3>

        <div class="mb-5">
            @component('core.badge-checkbox', [
                'labelText' => 'badge checkbox',
                'id' => 'id-badge-checkbox',
                'name' => 'name-badge-checkbox',
                'iconClass' => 'icon-drums',
            ])
            @endcomponent
        </div>
    </div>

    <div class="flex flex-col h-screen p-5">
        <h3 class="text-xl mb-5 pl-1">Buttons</h3>

        <div class="mb-5">
            @component('core.button', [
                'labelText' => 'full width button',
                'fullWidth' => 'true',
                'type' => 'submit',
            ])
            @endcomponent
        </div>

        <div class="mb-5">
            @component('core.button', [
                'labelText' => 'regular button',
                'type' => 'submit',
            ])
            @endcomponent
        </div>

        <div class="mb-5 flex">
            @component('core.anchor-button', [
                'labelText' => 'grey outlined anchor button',
                'theme' => 'grey',
                'href' => '#',
            ])
            @endcomponent
        </div>
    </div>
</div>

<script>
const elements = document.getElementsByClassName('badge-checkbox');

Array.from(elements).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            const checkbox = element.getElementsByTagName('input')[0];

            checkbox.checked = !checkbox.checked;

            if (checkbox.checked) {
                element.classList.remove('text-blue-600');
                element.classList.add('bg-blue-600', 'text-white');
            } else {
                element.classList.remove('bg-blue-600', 'text-white');
                element.classList.add('text-blue-600');
            }

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
</body>
</html>