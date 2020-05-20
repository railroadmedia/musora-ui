@php
    $tabIndex = $tabIndex ?? 1;
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $labelText);
    $inputName = $inputName ?? '';
    $labelText = $labelText ?? '';
@endphp

<div class="badge-checkbox rounded-full border-2 border-blue-600 py-1 flex cursor-pointer uppercase text-blue-600 text-sm font-medium">
    <input
        type="checkbox"
        id="{{ $inputId }}"
        name="{{ $inputName }}"
        tabindex="{{ $tabIndex }}"
        class="hidden lesson-cb"
    ><label
        for="{{ $inputId }}"
        class="ml-2 flex content-center cursor-pointer"
    >@isset($iconClass)<i
        class="{{ $iconClass }} text-lg pr-1"
    ></i> @endisset{{ $labelText }}</label>
</div>

@push('scripts')
<script type="text/javascript">
// todo - add option to skip js insert, for pages that use several checkboxes
const elements = document.getElementsByClassName('badge-checkbox');

Array.from(elements).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            const checkbox = element.getElementsByTagName('input')[0];

            checkbox.checked = !checkbox.checked;

            if (checkbox.checked) {
                element.classList.remove('text-blue-600');
                element.classList.add('bg-blue-600', 'text-white');
            } else {
                element.classList.remove('bg-blue-600', 'text-white');
                element.classList.add('text-blue-600');
            }

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
@endpush
