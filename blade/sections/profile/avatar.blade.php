@push('styles')
<style type="text/css">
#profile-avatar {
    flex-basis: 200px;
}
#clear-avatar {
    background: #f71b26;
}
#test-cmp.active {
    display: flex;
}
</style>
@endpush

<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'avatar-modal']
            ]
        )
        @endcomponent
    </div>
    <div class="flex items-center py-2">
        <div id ="profile-avatar" class="relative">
            <img src="{{ $data['inputs']['avatar'] }}" class="rounded-full overflow-hidden">
            <div
                id="clear-avatar"
                class="absolute cursor-pointer top-0 right-0 rounded-full text-white w-6 h-6 flex items-center justify-center"
            >
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="flex-1 flex justify-center">
            <div class="flex flex-col items-center text-medium-gray text-xs">
                <p>For best results upload a square photo.</p>
                <p><span class="italic">Max file size:</span> <span class="font-bold">5MB</span></p>
            </div>
        </div>
    </div>
    <div id="test-cmp" class="flex items-center py-2 hidden">
        <!-- todo - remove after cropper trigger issue is fixed -->
        <settings-profile-avatar></settings-profile-avatar>
    </div>
    @include('sections.profile.avatar-modal')
</div>
