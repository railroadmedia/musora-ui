@php
    $href = $href ?? '#';
    $theme = $theme ?? 'blue';
    $tabIndex = $tabIndex ?? 1;
    $labelText = $labelText ?? '';
    $fullWidth = $fullWidth ?? false;
    $smallCollapse = $smallCollapse ?? false;

    $_inputClasses = [];

    if ($fullWidth) {
        $_inputClasses[] = 'px-4';
        $_inputClasses[] = 'w-full';
    } if ($smallCollapse) {
        $_inputClasses[] = 'px-12';
    } else {
        $_inputClasses[] = 'px-16'; // maybe add inline-block
    }

    if ($smallCollapse) {
        $_inputClasses[] = 'text-sm';
        $_inputClasses[] = 'sm:text-base';
    }

    if ($theme == 'blue') {
        $_inputClasses[] = 'bg-edge-blue';
        $_inputClasses[] = 'text-white';
    } else if ($theme == 'reversed') {
        $_inputClasses[] = 'text-edge-blue';
        $_inputClasses[] = 'bg-white';
    } else if ($theme == 'blue-reversed') {
        // todo - add theme classes for reversed + blue border, for songs_song complete button
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
    class="py-3 rounded-full leading-none font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase {{ $_inputClasses }} font-roboto"
    tabindex="{{ $tabIndex }}"
>{{ $labelText }}</a>
