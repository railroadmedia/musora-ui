@php
    $href = $href ?? '#';
    $labelText = $labelText ?? '';
    $id = $id ?? 'anchor-button-' . str_replace(' ', '-', $labelText);
    $theme = $theme ?? 'blue';
    $tabIndex = $tabIndex ?? 1;
    $fullWidth = $fullWidth ?? false;
    $fixedWidth = $fixedWidth ?? false;
    $smallCollapse = $smallCollapse ?? false;
    $extraSmallCollapse = $extraSmallCollapse ?? false;
    $collapse = $collapse ?? 'sm';

    $_inputClasses = $classes ?? [];

    if ($fullWidth) {
        $_inputClasses[] = 'px-4';
        $_inputClasses[] = 'w-full';
        $_inputClasses[] = 'py-3';
    } else if ($fixedWidth) {
        $_inputClasses[] = 'w-48';
        $_inputClasses[] = 'flex';
        $_inputClasses[] = 'justify-center';
        $_inputClasses[] = 'py-3';
    } else if ($smallCollapse) {
        $_inputClasses[] = 'px-10';
        $_inputClasses[] = 'py-3';
    } else if ($extraSmallCollapse) {
        $_inputClasses[] = 'px-8';
        $_inputClasses[] = 'py-2';
        $_inputClasses[] = $collapse . ':px-16';
        $_inputClasses[] = $collapse . ':py-3';
    } else {
        $_inputClasses[] = 'px-16'; // maybe add inline-block
        $_inputClasses[] = 'py-3';
    }

    if ($smallCollapse) {
        $_inputClasses[] = 'text-sm';
        $_inputClasses[] = 'sm:text-base';
    }

    if ($theme == 'blue') {
        $_inputClasses[] = 'bg-edge-blue';
        $_inputClasses[] = 'border-2';
        $_inputClasses[] = 'border-edge-blue';
        $_inputClasses[] = 'text-white';
        $_inputClasses[] = 'active:bg-blue-700';
    } else if ($theme == 'reversed') {
        $_inputClasses[] = 'text-edge-blue';
        $_inputClasses[] = 'bg-white';
    } else if ($theme == 'blue-reversed') {
        // todo - add theme classes for reversed + blue border, for songs_song complete button
        $_inputClasses[] = 'border-2';
        $_inputClasses[] = 'border-edge-blue';
        $_inputClasses[] = 'text-edge-blue';
    } else if ($theme == 'black') {
        $_inputClasses[] = 'leading-none';
        $_inputClasses[] = 'border-2';
        $_inputClasses[] = 'border-black';
        $_inputClasses[] = 'text-black';
        $_inputClasses[] = 'hover-trans';
        $_inputClasses[] = 'hover:bg-light-gray';
    } else if ($theme == 'white') {
        $_inputClasses[] = 'border-2';
        $_inputClasses[] = 'border-white';
        $_inputClasses[] = 'text-black';
        $_inputClasses[] = 'hover-trans';
        $_inputClasses[] = 'hover:bg-light-gray';
        $_inputClasses[] = 'hover:border-light-gray';
    } else if ($theme == 'white-wire') {
        $_inputClasses[] = 'border-2';
        $_inputClasses[] = 'border-white';
        $_inputClasses[] = 'text-white';
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
    id="{{ $id }}"
    href="{{ $href }}"
    class="flex content-center rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase {{ $_inputClasses }} font-roboto"
    tabindex="{{ $tabIndex }}"
@isset($attrs)
    @foreach ($attrs as $attr => $value)
    {{ $attr }}="{{ $value }}"
    @endforeach
@endisset
>@isset($iconClass)<i class="{{ $iconClass }} text-lg pr-3"></i>@endisset{{ $labelText }}@isset($rightIconClass)<i class="{{ $rightIconClass }} text-lg pl-3"></i>@endisset</a>
