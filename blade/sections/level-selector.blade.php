@php
    $skipCollapseStyle = $skipCollapseStyle ?? false;
    $skipCollapseScript = $skipCollapseScript ?? false;
@endphp

@push('styles')
<style type="text/css">
.level-select.level-checked .level-ind {
    display: block;
}
.level-select.level-checked ~ .level-select .level-bar {
    background-color: #2c5282;
}
@if (!$skipCollapseStyle)
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
@endif
</style>
@endpush

<div>
    <h4 class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"><span class="font-roboto">set your skill level</span><div class="small:hidden flex items-center"><div class="flex items-center justify-center border rounded-full w-4 h-4 mr-2 text-xs text-medium-gray">?</div><i class="icon-home text-lg font-bold small:hidden collapse-trigger-open"></i><i class="icon-hammer text-lg font-bold small:hidden collapse-trigger-close"></i></div></h4>
    <div class="collapse-container small:expand">
        <div class="px-2 py-2 small:px-6">
            <div class="grid grid-cols-5 cursor-pointer">
                <div class="py-4 level-select">
                    <div style="height: 12px;" class="border-2 border-edge-blue bg-white relative rounded-l-full level-bar">
                        <input type="radio" class="hidden" id="level-one" name="level" value="1">
                        <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                    </div>
                </div>
                <div class="py-4 level-select level-checked">
                    <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative level-bar">
                        <input type="radio" class="hidden" id="level-two" name="level" value="2">
                        <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                    </div>
                </div>
                <div class="py-4 level-select">
                    <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative level-bar">
                        <input type="radio" class="hidden" id="level-three" name="level" value="3">
                        <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                    </div>
                </div>
                <div class="py-4 level-select">
                    <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative level-bar">
                        <input type="radio" class="hidden" id="level-four" name="level" value="4">
                        <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                    </div>
                </div>
                <div class="py-4 level-select">
                    <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative rounded-r-full level-bar">
                        <input type="radio" class="hidden" id="level-five" name="level" value="5">
                        <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col small:flex-row items-center text-2xl">
                <div class="w-1/4 hidden small:block"></div>
                <div id="level-tab-1" class="w-2/4 text-center level-tab hidden">
                    <span class="text-white font-extrabold">level 1</span>
                </div>
                <div id="level-tab-2" class="w-2/4 text-center level-tab">
                    <span class="text-white font-extrabold">level 2</span>
                </div>
                <div id="level-tab-3" class="w-2/4 text-center level-tab hidden">
                    <span class="text-white font-extrabold">level 3</span>
                </div>
                <div id="level-tab-4" class="w-2/4 text-center level-tab hidden">
                    <span class="text-white font-extrabold">level 4</span>
                </div>
                <div id="level-tab-5" class="w-2/4 text-center level-tab hidden">
                    <span class="text-white font-extrabold">level 5</span>
                </div>
                <div class="w-1/4 flex justify-center leading-none py-4 small:justify-end small:py-0">
                    <a href="#" class="rounded-full border-2 border-edge-dark-blue text-edge-dark-blue px-6 text-xs py-1 small:px-8 small:text-base">all</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
let levels = Array.from(document.getElementsByClassName('level-select'));
let levelsTabs = Array.from(document.getElementsByClassName('level-tab'));

function showTab(tabNumber) {
    let tabId = 'level-tab-' + tabNumber;
    levelsTabs.forEach(function(tab) {
        if (tab.id == tabId) {
            tab.classList.remove('hidden');
        } else {
            tab.classList.add('hidden');
        }
    });
}

levels.forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            levels.forEach(function(el) {
                el.classList.remove('level-checked');
            })

            let radio = element.getElementsByTagName('input')[0];

            radio.checked = true;

            showTab(radio.value);

            element.classList.add('level-checked');

            event.preventDefault();
            event.stopPropagation();
        }
    );
});

@if (!$skipCollapseScript)
const collapseTriggers = document.querySelectorAll('.collapse-trigger');

if (collapseTriggers.length) {
    Array.from(collapseTriggers).forEach((element) => {
        element.addEventListener('click', (event) => {
            element.classList.toggle('active');
        });
    });
}
@endif
</script>
@endpush