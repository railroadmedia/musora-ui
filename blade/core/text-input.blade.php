@php
    $inputName = $inputName ?? '';
    $inputValue = $inputValue ?? '';
    $labelText = $labelText ?? '';
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);

    $validationErrorText = $validationErrorText ?? '';

    $containerDivExtendedClasses = $containerDivExtendedClasses ?? '';
    $inputExtendedClasses = $inputExtendedClasses ?? '';

    $forceFocus = $forceFocus ?? false;
@endphp

<div class="relative mb-5 {{ $containerDivExtendedClasses }}">
    <input type="text"
           class="bg-light-gray w-full rounded-full p-3 pl-6 pt-4 pb-1 focus:outline-none floating-label {{ $forceFocus ? 'shadow-outline show-focused' : 'focus:shadow-outline' }} {{ $inputExtendedClasses }} {{ !empty($validationErrorText) ? 'validation-error' : '' }}"
           id="{{ $inputId }}"
           name="{{ $inputName }}"
           value="{{ $inputValue }}"
           placeholder=" "
           autocomplete="cc-number"
           autocorrect="off"
           spellcheck="false"
           inputmode="numeric"
           tabindex="1"
           aria-label="Credit or debit card number"
           aria-invalid="false">
    <label for="{{ $inputId }}" class="absolute text-medium-gray hover:cursor-text">{{ $labelText }}</label>

    @if(!empty($validationErrorText))
        <p class="text-validation-red text-xs italic font-bold mt-2 ml-2">{{ $validationErrorText }}</p>
    @endif
</div>