@php
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
@endphp

<div class="relative">
    <input type="text"
           class="bg-light-gray w-full rounded-full p-3 pl-6 pt-4 pb-1 focus:outline-none floating-label {{ $forceFocus ? 'shadow-outline show-focused' : 'focus:shadow-outline' }} {{ !empty($validationErrorText) ? 'validation-error' : '' }}"
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
           aria-invalid="{{ !empty($validationErrorText) ? 'true' : 'false' }}">
    <label for="{{ $inputId }}" class="absolute text-medium-gray hover:cursor-text">{{ $labelText }}</label>

    @if(!empty($validationErrorText))
        <p class="text-validation-red text-xs italic font-bold mt-2">{{ $validationErrorText }}</p>
    @endif
</div>