<div class="mx-auto w-full container h-full pt-4">
    <div class="flex flex-col medium:flex-row py-4">
        <div class="w-full mb-2 small:mb-0 medium:w-56 ml-3 flex flex-col-reverse small:flex-col">
            <div class="collapse-trigger small:hidden mr-6 text-center text-blue-500 uppercase font-semibold text-xs cursor-pointer"><span class="collapse-trigger-open">show filters</span><span class="collapse-trigger-close">hide filters</span></div>
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
                            <div class="text-dark-gray text-xs border-2 border-light-gray rounded-lg mr-6 lg:mr-3">
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
        <div class="w-full">
            <div class="hidden small:flex text-xs flex-wrap items-center text-dark-gray pb-2 px-3">
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
                            <span class="capitalize">{{ $item['label'] ?? $item['name'] }}</span><i class="fas fa-times-circle badge-filter text-dark-gray text-base ml-1 cursor-pointer"></i>
                        </div>
                    @endforeach
                @endforeach
            </div>
            
            <div class="">
                @foreach ($videos as $video)
                    <div class="">
                        @component('musora-ui::core.lesson-video-card', $video)
                        @endcomponent
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
