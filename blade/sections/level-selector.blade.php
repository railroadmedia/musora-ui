@push('styles')
<style type="text/css">
.level-select.level-checked .level-ind {
    display: block;
}
.level-select.level-checked ~ .level-select .level-bar {
    background-color: #2c5282;
}
</style>
@endpush

<div>
    <h4 class="py-2 text-center text-white bg-edge-dark-blue font-semibold">set your skill level</h4>
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
        <div class="flex small:items-center justify-between text-2xl">
            <div class="w-1/4 hidden small:block"></div>
            <div id="level-tab-1" class="w-2/4 small:text-center level-tab hidden">
                <span class="text-white font-extrabold">level 1</span>
            </div>
            <div id="level-tab-2" class="w-2/4 small:text-center level-tab">
                <span class="text-white font-extrabold">level 2</span>
            </div>
            <div id="level-tab-3" class="w-2/4 small:text-center level-tab hidden">
                <span class="text-white font-extrabold">level 3</span>
            </div>
            <div id="level-tab-4" class="w-2/4 small:text-center level-tab hidden">
                <span class="text-white font-extrabold">level 4</span>
            </div>
            <div id="level-tab-5" class="w-2/4 small:text-center level-tab hidden">
                <span class="text-white font-extrabold">level 5</span>
            </div>
            <div class="w-1/4 flex items-center justify-end">
                <a href="#" class="rounded-full border-2 border-edge-dark-blue text-edge-dark-blue py-1 px-8 text-base">all</a>
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
</script>
@endpush