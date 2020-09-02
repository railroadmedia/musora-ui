@push('styles')
<style type="text/css">
@media screen and (min-width:64rem) {
    #profile-gear-image {
        flex-basis: 300px;
    }
}
#clear-gear-image {
    background: #f71b26;
}
</style>
@endpush

<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg sm:text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'gear-modal'],
                'extraSmallCollapse' => true,
            ]
        )
        @endcomponent
    </div>
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row items-center py-2">
        <div id ="profile-gear-image" class="relative">
            @if (isset($data['inputs']['gear']) && $data['inputs']['gear'])
                <img src="{{ $data['inputs']['gear'] }}" class="">
                <div
                    id="clear-gear-image"
                    class="absolute cursor-pointer top-0 right-0 rounded-full text-white w-6 h-6 flex items-center justify-center m-2"
                >
                    <i class="fas fa-times"></i>
                </div>
            @else
                <img src="https://dmmior4id2ysr.cloudfront.net/assets/images/default-gear-photo.jpg" class="">
            @endif
        </div>
        <div class="flex-1 flex justify-center">
            <div class="flex flex-col items-center text-medium-gray text-xs">
                <p>For best results upload photo larger than 1280x720.</p>
                <p><span class="italic">Max file size:</span> <span class="font-bold">5MB</span></p>
            </div>
        </div>
    </div>
    @include('sections.profile.gear-image-modal')
</div>
