@push('styles')
<style type="text/css">
#breadcrumbs-container {
    padding-top: 50px;
}

@media (min-width: 40rem) {
    #breadcrumbs-container {
        padding-top: 65px;
    }
}
</style>
@endpush

<div id="breadcrumbs-container" class="bg-header w-full border-b border-header-gray">
    <div class="mx-auto w-full container leading-none flex items-center justify-center px-3 py-3">
        @foreach ($parents as $item)
            <div class="font-medium text-header-gray text-xs uppercase"><a href="{{ $item['url'] }}" class="">{{ $item['label'] }}</a><span class="px-2">/</span></div>
        @endforeach
        <div class="font-medium text-white text-xs uppercase">{{ $current['label'] }}</div>
    </div>
</div>
