@push('styles')
<style type="text/css">
.icon-checkbox.checked {
    font-weight: 700;
    color: #000;
}
.icon-checkbox.checked .checkbox-icon {
    display: block;
}
.icon-checkbox:not(.checked) .checkbox-icon {
    display: none;
}
</style>
@endpush

@php
    // keys are the number of videos per row, values are the css classes
    $_gridSetup = [
        4 => 'grid-cols-1 gap-10 small:gap-4 small:row-gap-8 small:grid-cols-3 large:grid-cols-4',
        5 => 'grid-cols-1 gap-10 small:gap-4 small:row-gap-8 small:grid-cols-3 large:grid-cols-5',
    ];

    $videosPerRow = $videosPerRow ?? 4;
    $_gridClasses = $_gridSetup[$videosPerRow];
@endphp

<div class="flex flex-col medium:flex-row py-4">
    <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col">
        <div class="collapse-trigger small:hidden text-center text-blue-500 uppercase font-semibold text-xs cursor-pointer"><span class="collapse-trigger-open">show filters</span><span class="collapse-trigger-close">hide filters</span></div>
        <div class="collapse-container small:expand overflow-hidden">
            <div class="flex flex-col flex-no-wrap">
                @foreach ($filterGroups as $filterGroup)
                    @php
                        $title = $filterGroup['title'] ?? '';
                        $items = $filterGroup['items'] ?? [];
                        $collapsed = $filterGroup['collapsed'] ?? false;

                        $_triggerClasses = [];

                        if (!$collapsed) {
                            $_triggerClasses[] = 'active';
                        }

                        $_triggerClasses = implode(' ', $_triggerClasses);
                    @endphp

                    <div class="w-full mb-2">
                        <div class="text-dark-gray text-xs border-2 border-light-gray rounded-lg">
                            <div class="collapse-trigger flex content-center justify-between px-3 py-2 font-semibold small:text-sm cursor-pointer font-roboto {{ $_triggerClasses }}">
                                <span class="uppercase">{{ $title }}</span><i class="icon-home text-lg font-bold collapse-trigger-open"></i><i class="icon-hammer text-lg font-bold collapse-trigger-close"></i>
                            </div>
                            <div class="collapse-container overflow-hidden">
                                <div style="max-height: 230px;" class="mb-3 font-semibold" data-simplebar>
                                    @foreach ($items as $item)
                                        @component('core.icon-checkbox', [
                                            'inputId' => $item['name'],
                                            'inputName' => $item['name'],
                                            'tabIndex' => $item['tab'] ?? null,
                                            'labelText' => $item['label'] ?? $item['name'],
                                            'skipStyle' => true,
                                            'skipScript' => true,
                                            'active' => $item['active'] ?? false,
                                        ])
                                        @endcomponent
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="w-full medium:ml-8">
        <div class="my-4 medium:my-0">
            @if (isset($results['perPage']))
                <div class="flex flex-col sm:flex-row content-center text-medium-gray text-sm">
                    <div class="flex-1">
                        <span class="font-bold">{{ $results['count'] }}</span> <span class="capitalize">{{ $results['type'] }}</span>
                    </div>
                    <div class="flex-none flex mt-2 sm:mt-0">
                        <div>
                            <span class="font-bold">Per Page:</span> <select class="bg-white"><option>{{ $results['perPage'] }}</option></select>
                        </div>
                        <div class="ml-8">
                            <span class="font-bold">Sort by:</span> <select class="bg-white"><option>Newest First</option></select>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex content-center justify-between text-medium-gray text-sm">
                    <div>
                        <span class="font-bold">{{ $results['count'] }}</span> <span class="capitalize">{{ $results['type'] }}</span>
                    </div>
                    <div>
                        <span class="font-bold">Sort by:</span> <select class="bg-white"><option>Newest First</option></select>
                    </div>
                </div>
            @endif
        </div>

        <div class="hidden small:flex text-xs flex-wrap items-center text-dark-gray py-2">
            <div class="py-2 mr-1"><a href="#" class="text-edge-blue uppercase font-bold font-roboto">clear all</a></div>
            @foreach ($filterGroups as $filterGroup)
                @foreach ($filterGroup['items'] ?? [] as $item)
                    @php
                        $active = $item['active'] ?? false;

                        $_containerClasses = [];

                        if (!$active) {
                            $_containerClasses[] = 'hidden';
                        }

                        $_containerClasses = implode(' ', $_containerClasses);
                    @endphp

                    <div id="badge-filter-{{ $item['name'] }}" class="m-1 px-2 py-1 flex items-center bg-light-gray rounded-full font-roboto {{ $_containerClasses }}">
                        <span class="capitalize">{{ $item['label'] ?? $item['name'] }}</span><i class="icon-info badge-filter text-dark-gray text-base ml-1 cursor-pointer"></i>
                    </div>
                @endforeach
            @endforeach
        </div>
        
        <div class="grid {{ $_gridClasses }} pt-2 pb-20">
            @foreach ($videos as $videoCard)
                <div class="">
                    @component('core.video-card', $videoCard)
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
const iconCheckboxes = document.getElementsByClassName('icon-checkbox');

Array.from(iconCheckboxes).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {

            element.classList.toggle('checked');

            let badge = document.getElementById('badge-' + element.id);

            if (badge) {
                if (element.classList.contains('checked')) {
                    badge.classList.remove('hidden');
                } else {
                    badge.classList.add('hidden');
                }
            } else {
                console.log('could not locate filter badge with id: %s', JSON.stringify('badge-' + element.id));
            }

            event.preventDefault();
            event.stopPropagation();
        }
    );
});

const filtersBadges = document.getElementsByClassName('badge-filter');

Array.from(filtersBadges).forEach(function(element) {
    element.addEventListener(
        'click',
        function(event) {
            let container = element.parentElement;

            let filterElement = document.getElementById(container.id.substr(6));

            filterElement.classList.remove('checked');
            container.classList.add('hidden');

            event.preventDefault();
            event.stopPropagation();
        }
    );
});
</script>
@endpush
