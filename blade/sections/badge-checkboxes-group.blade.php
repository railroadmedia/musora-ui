@php
    $skipCollapseStyle = $skipCollapseStyle ?? false;
    $skipCollapseScript = $skipCollapseScript ?? false;

    $_badgePadding = 'p-1';

    if (count($checkboxes) < 6) {
        $_badgePadding = 'p-2';
    }

    $_width = 'w-1/2 small:w-1/5';

    if (count($checkboxes) < 5) {
        $_width = 'w-full sm:w-1/' . count($checkboxes);
    }
@endphp

@push('styles')
@if (!$skipCollapseStyle)
<style type="text/css">
.collapse-trigger.active .collapse-trigger-open,
.collapse-trigger:not(.active) .collapse-trigger-close {
    display: none;
}
.collapse-trigger:not(.active) .collapse-trigger-open,
.collapse-trigger.active .collapse-trigger-close {
    display: inline-block;
}
.collapse-trigger.active + .collapse-container {
    max-height: 1000px;
}
.collapse-trigger:not(.active) + .collapse-container {
    max-height: 0;
}
.collapse-container {
    -webkit-transition: max-height .2s ease-in-out;
    transition: max-height .3s ease-in-out;
}
@media (min-width: 40rem) {
    .collapse-trigger.active + .collapse-container.small\:expand,
    .collapse-trigger:not(.active) + .collapse-container.small\:expand {
        max-height: 1000px;
    }
}
</style>
@endif
@endpush

<div>
    <h4 class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-semibold text-sm small:text-base"><span>{{ $title }}</span><div class="small:hidden flex items-center"><i class="icon-home text-lg font-bold small:hidden collapse-trigger-open"></i><i class="icon-hammer text-lg font-bold small:hidden collapse-trigger-close"></i></div></h4>
    <div class="collapse-container small:expand">
        <div class="p-3 flex flex-wrap">
            @foreach ($checkboxes as $checkbox)
                <div class="{{ $_width }} {{ $_badgePadding }}">
                    @component('core.badge-checkbox', [
                        'labelText' => $checkbox['label'] ?? $checkbox['name'],
                        'id' => $checkbox['name'],
                        'name' => $checkbox['name'],
                        'tabIndex' => $checkbox['tab'] ?? null,
                        'theme' => 'blue',
                        'skipScript' => !$loop->last,
                        'active' => $checkbox['active'] ?? false,
                        'padding' => true
                    ])
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
@if (!$skipCollapseScript)
<script type="text/javascript">
const collapseTriggers = document.querySelectorAll('.collapse-trigger');

if (collapseTriggers.length) {
    Array.from(collapseTriggers).forEach((element) => {
        element.addEventListener('click', (event) => {
            element.classList.toggle('active');
        });
    });
}
</script>
@endif
@endpush
