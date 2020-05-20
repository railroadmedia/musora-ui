@extends('layouts.public')

@section('title', 'Create Account - Level')

@push('styles')
<style type="text/css">
/* todo - move the css from elements inline into classes, here */
.level-select.level-checked .level-ind {
    display: block;
}
.level-select.level-checked ~ .level-select .level-bar {
    background-color: white;
}
</style>
@endpush

@section('content')
<div class="m-10 w-full">
    <h2 class="font-extrabold text-center uppercase mb-6">set your skill level</h2>
    <!-- todo: refactor the level selector into a component & theme it to reuse in edge page -->
    <div class="grid grid-cols-5">
        <div class="py-4 level-select">
            <div style="height: 8px;" class="border-2 border-blue-600 bg-blue-600 relative rounded-l-full level-bar">
                <input type="radio" class="hidden" id="level-one" name="level" value="1">
                <div style="height: 30px; width: 30px; top: -13px; right: -13px" class="border-4 border-white bg-blue-600 rounded-full absolute hidden z-10 level-ind"></div>
            </div>
        </div>
        <div class="py-4 level-select level-checked">
            <div style="height: 8px;" class="border-2 border-l-0 border-blue-600 bg-blue-600 relative level-bar">
                <input type="radio" class="hidden" id="level-two" name="level" value="2">
                <div style="height: 30px; width: 30px; top: -13px; right: -13px" class="border-4 border-white bg-blue-600 rounded-full absolute hidden z-10 level-ind"></div>
            </div>
        </div>
        <div class="py-4 level-select">
            <div style="height: 8px;" class="border-2 border-l-0 border-blue-600 bg-blue-600 relative level-bar">
                <input type="radio" class="hidden" id="level-three" name="level" value="3">
                <div style="height: 30px; width: 30px; top: -13px; right: -13px" class="border-4 border-white bg-blue-600 rounded-full absolute hidden z-10 level-ind"></div>
            </div>
        </div>
        <div class="py-4 level-select">
            <div style="height: 8px;" class="border-2 border-l-0 border-blue-600 bg-blue-600 relative level-bar">
                <input type="radio" class="hidden" id="level-four" name="level" value="4">
                <div style="height: 30px; width: 30px; top: -13px; right: -13px" class="border-4 border-white bg-blue-600 rounded-full absolute hidden z-10 level-ind"></div>
            </div>
        </div>
        <div class="py-4 level-select">
            <div style="height: 8px;" class="border-2 border-l-0 border-blue-600 bg-blue-600 relative rounded-r-full level-bar">
                <input type="radio" class="hidden" id="level-five" name="level" value="5">
                <div style="height: 30px; width: 30px; top: -13px; right: -13px" class="border-4 border-white bg-blue-600 rounded-full absolute hidden z-10 level-ind"></div>
            </div>
        </div>
    </div>
    <div class="mb-8">
        <div id="tab-1" class="text-center tab hidden">
            <h3 class="py-2 font-medium">Level 1</h3>
            <p class="text-sm">A "Level 1" should be able to play the rudiments blah di blah maecenas sodales tellus quis aliquam vulputate. Nam vehicula ultricies augue, a consequat tortor maximus ut. Sed a gravida dui, sit amet ullamcorper magna.</p>
        </div>
        <div id="tab-2" class="text-center tab">
            <h3 class="py-2 font-medium">Level 2</h3>
            <p class="text-sm">A "Level 2" should be able to play the rudiments blah di blah maecenas sodales tellus quis aliquam vulputate. Nam vehicula ultricies augue, a consequat tortor maximus ut. Sed a gravida dui, sit amet ullamcorper magna.</p>
        </div>
        <div id="tab-3" class="text-center tab hidden">
            <h3 class="py-2 font-medium">Level 3</h3>
            <p class="text-sm">A "Level 3" should be able to play the rudiments blah di blah maecenas sodales tellus quis aliquam vulputate. Nam vehicula ultricies augue, a consequat tortor maximus ut. Sed a gravida dui, sit amet ullamcorper magna.</p>
        </div>
        <div id="tab-4" class="text-center tab hidden">
            <h3 class="py-2 font-medium">Level 4</h3>
            <p class="text-sm">A "Level 4" should be able to play the rudiments blah di blah maecenas sodales tellus quis aliquam vulputate. Nam vehicula ultricies augue, a consequat tortor maximus ut. Sed a gravida dui, sit amet ullamcorper magna.</p>
        </div>
        <div id="tab-5" class="text-center tab hidden">
            <h3 class="py-2 font-medium">Level 5</h3>
            <p class="text-sm">A "Level 5" should be able to play the rudiments blah di blah maecenas sodales tellus quis aliquam vulputate. Nam vehicula ultricies augue, a consequat tortor maximus ut. Sed a gravida dui, sit amet ullamcorper magna.</p>
        </div>
    </div>
    <div class="flex justify-center">
        @component('core.anchor-button', [
            'labelText' => 'next',
            'href' => '/router.php/account_lessons',
        ])
        @endcomponent
    </div>
</div>
@endsection

@section('footer')
<div class="bg-white flex flex-wrap p-6 uppercase mt-8 lg:mt-0">
    <div class="hide lg:w-1/6"></div>
    <div class="w-full lg:w-4/6">
        <div class="rounded-full border-2 border-gray p-1 m-auto max-w-xl leading-none grid grid-cols-3">
            <a href="#" class="rounded-full bg-green-400 text-white py-1">
                <div class="leading-none text-xs text-center">
                    <span>step 1</span><br><span class="font-semibold">set level</span>
                </div>
            </a><a href="#" class="rounded-full text-gray py-1">
                <div class="leading-none text-xs text-center">
                    <span>step 2</span><br><span class="font-semibold">choose lessons</span>
                </div>
            </a><a href="#" class="rounded-full text-gray py-1">
                <div class="leading-none text-xs text-center">
                    <span>step 3</span><br><span class="font-semibold">create profile</span>
                </div>
            </a>
        </div>
    </div>
    <div class="w-full text-center pt-6 lg:w-1/6 lg:text-right lg:pt-0">
        <div class="flex justify-end leading-none">
            @component('core.anchor-button', [
                'labelText' => 'skip',
                'href' => '#',
                'theme' => 'gray'
            ])
            @endcomponent
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
let levels = Array.from(document.getElementsByClassName('level-select'));
let tabs = Array.from(document.getElementsByClassName('tab'));

function showTab(tabNumber) {
    let tabId = 'tab-' + tabNumber;
    tabs.forEach(function(tab) {
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
