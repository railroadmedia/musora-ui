@php
    $tabIndex = $tabIndex ?? 1;
    $inputName = $inputName ?? '';
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $labelText);
    $labelText = $labelText ?? '';
    $skipScript = $skipScript ?? false;
    $theme = $theme ?? 'white';
    $active = $active ?? false;
    $checked = $active ? 'checked=checked' : '';
    $padding = $padding ?? false;
@endphp

<div class="badge-checkbox rounded-full border-2 flex cursor-pointer uppercase border-edge-blue py-2 text-sm">
    <input
        type="checkbox"
        id="{{ $inputId }}"
        name="{{ $inputName }}"
        tabindex="{{ $tabIndex }}"
        class="hidden"
        {{ $checked }}
    ><label
        for="{{ $inputId }}"
        class="cursor-pointer font-roboto ml-2 flex content-center"
    >@isset($iconClass)<i
        class="{{ $iconClass }} text-lg pr-1"
    ></i> @endisset{{ $labelText }}</label>
</div>
