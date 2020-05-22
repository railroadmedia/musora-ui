@php
    // todo - add support for default filters active

    $tabIndex = $tabIndex ?? 1;
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $labelText);
    $inputName = $inputName ?? '';
    $labelText = $labelText ?? '';
    $skipStyle = $skipStyle ?? false;
    $skipScript = $skipScript ?? false;
@endphp

@push('styles')
@if (!$skipStyle)
<style type="text/css">
.icon-checkbox.checked {
    font-weight: 600;
    color: #000;
}
.icon-checkbox.checked .checkbox-icon {
    display: block;
}
.icon-checkbox:not(.checked) .checkbox-icon {
    display: none;
}
</style>
@endif
@endpush

<div class="icon-checkbox px-4 text-base">
    <input
        type="checkbox"
        id="{{ $inputId }}"
        name="{{ $inputName }}"
        tabindex="{{ $tabIndex }}"
        class="hidden"
    ><label
        for="{{ $inputId }}"
        class="cursor-pointer flex items-center py-1 text-base capitalize "
    ><i class="icon-info text-base pr-1 checkbox-icon"></i><span class="text-xs">{{ $labelText }}</span></label>
</div>

@push('scripts')
@if (!$skipScript)
<script type="text/javascript">
const iconCheckboxes = document.getElementsByClassName('icon-checkbox');

Array.from(iconCheckboxes).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            element.classList.toggle('checked');

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
@endif
@endpush
