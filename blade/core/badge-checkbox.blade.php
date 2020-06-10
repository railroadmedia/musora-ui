@php
    $tabIndex = $tabIndex ?? 1;
    $inputId = $inputId ?? 'text-input-' . md5(__FILE__ . $inputName . $labelText);
    $inputName = $inputName ?? '';
    $labelText = $labelText ?? '';
    $skipScript = $skipScript ?? false;
    $theme = $theme ?? 'white';
    $active = $active ?? false;
    $checked = $active ? 'checked=checked' : '';
    $padding = $padding ?? false;

    $_containerClasses = [];
    $_labelClasses = [];

    $_checkedClasses = [];
    $_uncheckedClasses = [];

    if ($padding) {
        $_containerClasses[] = 'py-1';
    }

    if ($theme == 'white') {
        $_containerClasses[] = 'border-blue-600';
        $_containerClasses[] = 'py-1';
        $_containerClasses[] = 'text-blue-600';
        $_containerClasses[] = 'text-sm';

        $_labelClasses[] = 'ml-2';
        $_labelClasses[] = 'flex';
        $_labelClasses[] = 'content-center';

        $_checkedClasses[] = 'bg-blue-600';
        $_checkedClasses[] = 'text-white';
        $_uncheckedClasses[] = 'text-blue-600';
    } else {
        // theme 'blue'
        $_containerClasses[] = 'justify-center';
        $_containerClasses[] = 'border-edge-dark-blue';
        $_containerClasses[] = 'text-edge-dark-blue';
        $_containerClasses[] = 'text-xs';
        $_containerClasses[] = 'leading-none';

        $_labelClasses[] = 'py-2';
        $_labelClasses[] = 'text-xs';

        $_checkedClasses[] = 'bg-white';
        $_checkedClasses[] = 'text-edge-blue';
        $_checkedClasses[] = 'border-white';
        $_checkedClasses[] = 'font-semibold';
        $_uncheckedClasses[] = 'bg-edge-blue';
        $_uncheckedClasses[] = 'text-edge-dark-blue';
        $_uncheckedClasses[] = 'border-edge-dark-blue';
    }

    if ($active) {
        $_containerClasses = array_merge($_containerClasses, $_checkedClasses);
        $_containerClasses = array_diff($_containerClasses, $_uncheckedClasses);
    }

    $_containerClasses = implode(' ', $_containerClasses);
    $_labelClasses = implode(' ', $_labelClasses);
@endphp

<div class="badge-checkbox rounded-full border-2 flex cursor-pointer uppercase {{ $_containerClasses }}">
    <input
        type="checkbox"
        id="{{ $inputId }}"
        name="{{ $inputName }}"
        tabindex="{{ $tabIndex }}"
        class="hidden"
        {{ $checked }}
    ><label
        for="{{ $inputId }}"
        class="cursor-pointer font-medium {{ $_labelClasses }}"
        style="-webkit-font-smoothing: antialiased;"
    >@isset($iconClass)<i
        class="{{ $iconClass }} text-lg pr-1"
    ></i> @endisset{{ $labelText }}</label>
</div>

@push('scripts')
@if (!$skipScript)
<script type="text/javascript">

const elements = document.getElementsByClassName('badge-checkbox');

Array.from(elements).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            const checkbox = element.getElementsByTagName('input')[0];

            checkbox.checked = !checkbox.checked;

            let checkedClasses = @json($_checkedClasses);
            let uncheckedClasses = @json($_uncheckedClasses);

            if (checkbox.checked) {
                element.classList.remove(...uncheckedClasses);
                element.classList.add(...checkedClasses);
            } else {
                element.classList.remove(...checkedClasses);
                element.classList.add(...uncheckedClasses);
            }

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
@endif
@endpush
