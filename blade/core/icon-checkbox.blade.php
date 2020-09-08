@php
    // todo - remove after adding vue based blade template to shows_show

    $tabIndex = $tabIndex ?? 1;
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $labelText);
    $containerId = 'filter-' . $inputId;
    $inputName = $inputName ?? '';
    $labelText = $labelText ?? '';
    $skipStyle = $skipStyle ?? false;
    $skipScript = $skipScript ?? false;
    $checked = ($active ?? false) ? 'checked' : null;

    $_containerClasses = [];

    if ($checked) {
        $_containerClasses[] = 'checked';
    }

    $_containerClasses = implode(' ', $_containerClasses);
@endphp

<div id="{{ $containerId }}" class="icon-checkbox px-4 text-base {{ $_containerClasses }}">
    <input
        type="checkbox"
        id="{{ $inputId }}"
        name="{{ $inputName }}"
        tabindex="{{ $tabIndex }}"
        class="hidden"
        {{ $checked }}
    ><label
        for="{{ $inputId }}"
        class="cursor-pointer flex items-center py-1 text-base capitalize "
    ><i class="fas fa-times-circle text-base pr-1 checkbox-icon"></i><span class="text-xs">{{ $labelText }}</span></label>
</div>
