@push('styles')
@if (!$skipStyle)
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endif
@endpush

@php
$inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $inputValue . $labelText);
@endphp

@include('core.text-input')

@push('scripts')
@if (!$skipScript)
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
let dateFormat = 'Y-m-d';
let altFormat = 'F j, Y';
flatpickr(
    {{ $inputId }},
    {
        altInput: true,
        altFormat,
        dateFormat,
    }
);
</script>
@endif
@endpush
