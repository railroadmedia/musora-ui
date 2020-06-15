@push('styles')
<style type="text/css">
.icon-checkbox.checked {
    font-weight: 600;
    color: #000;
}
.icon-checkbox.checked .checkbox-icon {
    display: block;
}
.icon-checkbox:not(.checked) .checkbox-icon {
    display: none;
}
.my-list-video-card:hover {
    background-color: #f3f9ff;
}
.video-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.my-list-video-card:hover .video-card-play {
    visibility: visible;
    opacity: 1;
}
</style>
@endpush

<div class="flex flex-col medium:flex-row py-4">
    <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col px-3 lg:px-0">
        <div class="w-full mb-2">
            <div class="text-dark-gray text-xs border-2 border-light-gray rounded-lg">
                <div class="collapse-trigger flex content-center justify-between px-3 py-2 font-semibold small:text-sm cursor-pointer active font-roboto">
                    <span class="uppercase">{{ $filters['title'] }}</span><i class="icon-home text-lg font-bold collapse-trigger-open"></i><i class="icon-hammer text-lg font-bold collapse-trigger-close"></i>
                </div>
                <div class="collapse-container overflow-hidden">
                    <div style="max-height: 230px;" class="mb-3 font-medium" data-simplebar>
                        @foreach ($filters['items'] as $item)
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
    </div>
    <div class="w-full lg:ml-5">
        <div class="px-3">
            <div class="flex content-center justify-between text-medium-gray text-xs">
                <div>
                    <span class="font-semibold">114</span> <span class="capitalize">lessons</span>
                </div>
                <div>
                    <span class="font-semibold">Sort by:</span> <select class="bg-white"><option>Newest First</option></select>
                </div>
            </div>
        </div>
        <div class="hidden small:flex text-xs flex-wrap items-center text-medium-gray py-2 px-3">
            <div class="py-2 mr-1"><a href="#" class="text-blue-500 uppercase font-bold font-roboto">clear all</a></div>
            @foreach ($filters['items'] ?? [] as $item)
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
        </div>
        <div class="py-2">
            @foreach ($sectionVideos ?? [] as $videoCard)
                @component('core.video-row-card', $videoCard)
                @endcomponent
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
