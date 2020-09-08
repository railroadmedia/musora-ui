@php
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);
    $inputName = $inputName ?? '';
    $inputValue = $inputValue ?? '';
    $tabIndex = $tabIndex ?? 1;
    $labelText = $labelText ?? '';
@endphp

<div class="flex flex-row items-center">
    <div class="toggle-input flex flex-row items-center justify-center">
        <input
            type="checkbox"
            class="hidden-input"
            name="{{ $inputName }}"
            value="{{ $inputValue ? 1 : 0 }}"
        >

        <input
            id="{{ $inputId }}"
            class="displayed"
            {{ !empty($inputValue) && $inputValue === true ? 'checked' : '' }}
            type="checkbox"
        >

        <div class="toggle flex flex-row items-center justify-center">
            <span class="handle"></span>
        </div>
    </div>

    <label for="{{ $inputId }}" class="ml-2 toggle-label text-xs">
        {{ $labelText }}
    </label>
</div>
