@push('styles')
@if (!$skipStyles)
<style type="text/css">
.toggle-input {
    height:30px;
    width:60px;
    flex-basis:60px;
    min-width:60px;
    position:relative;
    cursor:pointer;
}
.toggle-input input[type="checkbox"] {
    opacity:0;
    z-index:1;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    cursor:pointer;

}
.toggle-input input[type="checkbox"]:checked ~ .toggle {
    background-color:#000;
}
.toggle-input input[type="checkbox"]:checked ~ .toggle:after {
    content: "ON";
    left:6px;
    right:initial;
}
.toggle-input input[type="checkbox"]:checked ~ .toggle .handle {
    transform:translateX(30px);
}
.toggle-input .toggle {
    height:100%;
    width:100%;
    top:0;
    left:0;
    position:absolute;
    background-color: #999999;
    border-radius:30px;
    transition:background-color .2s ease-in-out;
    will-change:background-color;
    pointer-events:none;
    z-index:1;
}
.toggle-input .toggle:after {
    content: "OFF";
    position:absolute;
    top:7px;
    right:6px;
    width:24px;
    height:24px;
    text-align:center;
    color:#fff;
    font-size:12px;
    font-weight:700;
}
.toggle-input .toggle .handle {
    background-color:#fff;
    height:24px;
    width:24px;
    border-radius:50%;
    position:absolute;
    top:3px;
    left:3px;
    will-change:transform;
    transition:transform .2s ease-in-out;
}
</style>
@endif
@endpush

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

@push('scripts')
@if (!$skipScript)
<script type="text/javascript">
const toggleInputs = document.querySelectorAll('.toggle-input .displayed');

if (toggleInputs.length) {
    Array.from(toggleInputs).forEach((element) => {
        element.addEventListener('click', (event) => {
            const hiddenInput = element.parentElement.querySelector('.hidden-input');
            if (hiddenInput != null) {
                hiddenInput.value = element.checked ? 1 : 0;
            }
        });
    });
}
</script>
@endif
@endpush
