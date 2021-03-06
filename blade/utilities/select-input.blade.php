@php
    // themes: gray, wire
    $theme = $theme ?? 'gray';
    $inputName = $inputName ?? '';
    $inputValue = $inputValue ?? '';
    $labelText = $labelText ?? '';
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);
    $autoComplete = $autoComplete ?? '';
    $autoCorrect = $autoCorrect ?? 'off';
    $spellCheck = $spellCheck ?? 'true';
    $inputMode = $inputMode ?? '';
    $tabIndex = $tabIndex ?? 1;
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
