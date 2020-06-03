<div class="flex flex-col medium:flex-row py-4">
	<div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col">
		<!-- todo: add filter card -->
	</div>
	<div class="w-full medium:ml-4">
        <div class="my-4 medium:my-0">
            <div class="flex content-center justify-between text-medium-gray text-xs">
                <div>
                    <span class="font-semibold">114</span> <span class="capitalize">lessons</span>
                </div>
                <div>
                    <span class="font-semibold">Sort by:</span> <select class="bg-white"><option>Newest First</option></select>
                </div>
            </div>
        </div>
        <div class="hidden small:flex text-xs flex-wrap items-center text-medium-gray py-2">
            <div class="py-2 mr-1"><a href="#" class="text-blue-500 uppercase font-semibold">clear all</a></div>
            @foreach ($filters ?? [] as $item)
                @php
                    $active = $item['active'] ?? false;

                    $_containerClasses = [];

                    if (!$active) {
                        $_containerClasses[] = 'hidden';
                    }

                    $_containerClasses = implode(' ', $_containerClasses);
                @endphp

                <div id="badge-filter-{{ $item['name'] }}" class="m-1 px-2 py-1 flex items-center bg-light-gray rounded-full {{ $_containerClasses }}">
                    <span class="capitalize">{{ $item['label'] ?? $item['name'] }}</span><i class="icon-info badge-filter text-dark-gray text-base ml-1 cursor-pointer"></i>
                </div>
            @endforeach
        </div>
        <div class="grid py-2">
        	<!-- todo: add my list video rows -->
        </div>
    </div>
</div>
