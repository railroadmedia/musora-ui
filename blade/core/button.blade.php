@php
    $type = $type ?? 'button'; // button, reset or submit
    $tabIndex = $tabIndex ?? 1;
    $labelText = $labelText ?? '';
    $fullWidth = $fullWidth ?? false;

    $_inputClasses = [];

    if ($fullWidth) {
        $_inputClasses[] = 'px-4';
        $_inputClasses[] = 'w-full';
    } else {
        $_inputClasses[] = 'px-16'; // maybe add inline-block
    }

    $_inputClasses = implode(' ', $_inputClasses);
@endphp

<button
    type="{{ $type }}"
    class="bg-blue-600 text-white py-3 px-16 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase {{ $_inputClasses }}"
    tabindex="{{ $tabIndex }}"
>{{ $labelText }}</button>
