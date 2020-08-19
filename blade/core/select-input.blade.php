@php
    // themes: gray, wire
    $theme = $theme ?? 'gray';
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);
    $inputName = $inputName ?? '';
    $inputValue = $inputValue ?? '';
    $autoComplete = $autoComplete ?? '';
    $autoCorrect = $autoCorrect ?? 'off';
    $spellCheck = $spellCheck ?? 'true';
    $inputMode = $inputMode ?? '';
    $tabIndex = $tabIndex ?? 1;
    $labelText = $labelText ?? '';
    $validationErrorText = $validationErrorText ?? '';
    $forceFocus = $forceFocus ?? false;

    $_inputClasses = ['theme-' . $theme];

    if ($theme == 'gray') {
        $_inputClasses[] = 'bg-light-gray';
    } elseif ($theme == 'wire') {
        $_inputClasses[] = 'bg-transparent';

        if (empty($validationErrorText)) {
            $_inputClasses[] = 'border-1';
            $_inputClasses[] = 'border-gray';
        }
    }

    if ($forceFocus) {
        $_inputClasses[] = 'shadow-outline';
        $_inputClasses[] = 'show-focused';
    } else {
        $_inputClasses[] = 'focus:shadow-outline';
    }

    if (!empty($validationErrorText)) {
        $_inputClasses[] = 'validation-error';
    }

    $_inputClasses = implode(' ', $_inputClasses);
@endphp

@push('styles')
<style type="text/css">
select {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTI1NiAxNzkyIDE3OTIiPjxwYXRoIGQ9Ik0xNDI2LjQ0IDQwNy44NjRxMCAyNi0xOSA0NWwtNDQ4IDQ0OHEtMTkgMTktNDUgMTl0LTQ1LTE5bC00NDgtNDQ4cS0xOS0xOS0xOS00NXQxOS00NXExOS0xOSA0NS0xOWg4OTZxMjYgMCA0NSAxOXQxOSA0NXoiIGZpbGw9ImN1cnJlbnRDb2xvciIvPjwvc3ZnPg==) no-repeat calc(100% - 10px) 50%;
    background-size: 15px;
}
/* For IE10 */
select::-ms-expand {
  display: none;
}
</style>
@endpush

<div class="relative">
    <select
        class="w-full floating-label focus:outline-none rounded-full p-3 pl-5 pt-4 pb-1 focus-within:shadow-outline border-transparent hover:cursor-pointer {{ $_inputClasses }}"
        placeholder=" "
        id="{{ $inputId }}"
        name="{{ $inputName }}"
        value="{{ $inputValue }}"
        autocomplete="{{ $autoComplete }}"
        autocorrect="{{ $autoCorrect }}"
        spellcheck="{{ $spellCheck }}"
        inputmode="{{ $inputMode }}"
        tabindex="{{ $tabIndex }}"
        aria-label="{{ $labelText }}"
        aria-invalid="{{ !empty($validationErrorText) ? 'true' : 'false' }}"
    >
        @foreach ($options ?? [] as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
    <label for="{{ $inputId }}" class="absolute text-medium-gray hover:cursor-text">{{ $labelText }}</label>
</div>
