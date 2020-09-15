<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg sm:text-2xl font-bold capitalize pr-3">{{ $data['title'] }}</h2>
        @component(
            'musora-ui::core.anchor-button',
            [
                'id' => 'edit-avatar',
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'avatar-modal'],
                'extraSmallCollapse' => true,
            ]
        )
        @endcomponent
    </div>
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row items-center py-2">
        <div id ="profile-avatar" class="relative">
            @if (isset($data['inputs']['avatar']) && $data['inputs']['avatar'])
                <img src="{{ $data['inputs']['avatar'] }}" class="rounded-full overflow-hidden">
                <div
                    id="clear-avatar"
                    class="absolute cursor-pointer top-0 right-0 rounded-full text-white w-6 h-6 flex items-center justify-center"
                >
                    <i class="fas fa-times"></i>
                </div>
            @else
                <img src="https://s3.amazonaws.com/pianote/defaults/avatar.png" class="rounded-full overflow-hidden">
            @endif
        </div>
        <div class="flex-1 flex justify-center">
            <div class="flex flex-col items-center text-medium-gray text-xs">
                <p>For best results upload a square photo.</p>
                <p><span class="italic">Max file size:</span> <span class="font-bold">5MB</span></p>
            </div>
        </div>
    </div>
    @include('sections.profile.avatar-modal')
</div>
