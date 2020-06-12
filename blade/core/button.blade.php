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
    class="bg-edge-blue text-white py-3 rounded-full font-extrabold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase font-roboto {{ $_inputClasses }} flex items-center"
    tabindex="{{ $tabIndex }}"
>@isset($iconClass)<i class="{{ $iconClass }} text-lg pr-3"></i> @endisset{{ $labelText }}</button>
