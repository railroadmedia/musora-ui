@php
    // themes: gray, wire
    $theme = $theme ?? 'gray';
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);
    $inputName = $inputName ?? '';
    $inputValue = $inputValue ?? '';
    $type = $type ?? 'text'; // text or password
    $autoComplete = $autoComplete ?? '';
    $autoCorrect = $autoCorrect ?? 'off';
    $spellCheck = $spellCheck ?? 'true';
    $inputMode = $inputMode ?? '';
    $tabIndex = $tabIndex ?? 1;
    $labelText = $labelText ?? '';
    $validationErrorText = $validationErrorText ?? '';
    $forceFocus = $forceFocus ?? false;
    $classes = $classes ?? [];

    $_inputClasses = array_merge(['theme-' . $theme], $classes);

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

<div class="relative">
    <input type="{{ $type }}"
           class="w-full rounded-full p-3 pl-6 pt-4 pb-1 focus:outline-none floating-label {{ $_inputClasses }}"
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
