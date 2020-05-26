@php
    $href = $href ?? '#';
    $theme = $theme ?? 'blue';
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

    if ($theme == 'blue') {
        $_inputClasses[] = 'bg-blue-600';
        $_inputClasses[] = 'text-white';
    } else if ($theme == 'reversed') {
        $_inputClasses[] = 'text-blue-600';
        $_inputClasses[] = 'bg-white';
    } else {
        // theme gray, outlined
        $_inputClasses[] = 'border-2';
        $_inputClasses[] = 'border-gray';
        $_inputClasses[] = 'text-gray';
        $_inputClasses[] = 'active:text-white';
    }

    $_inputClasses = implode(' ', $_inputClasses);
@endphp
<a
    href="{{ $href }}"
    class="py-3 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase {{ $_inputClasses }}"
    tabindex="{{ $tabIndex }}"
>{{ $labelText }}</a>
