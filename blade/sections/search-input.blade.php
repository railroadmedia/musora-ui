@push('styles')
<style type="text/css">
#search-input-container {
    padding-top: 50px;
}

@media (min-width: 40rem) {
    #search-input-container {
        padding-top: 65px;
    }
}
</style>
@endpush

<div id="search-input-container" class="bg-header w-full border-b border-header-gray">
    <div id="search-sub-nav" class="mx-auto w-full container leading-none sm:h-16 flex flex-col sm:flex-row items-center justify-between px-3 py-4">
        <input type="text" name="search-term" value="drum fills" class="text-center mb-4 sm:mb-0 sm:text-left text-white bg-header w-full sm:w-64 text-xl" placeholder="Enter search term">
        <div class="">
        @component('core.button', [
            'labelText' => 'search',
            'type' => 'submit',
        ])
        @endcomponent
        </div>
    </div>
</div>
