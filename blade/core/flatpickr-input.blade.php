@php
$inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);
$classes = ['flatpickr'];
@endphp

@include('musora-ui::core.text-input')
