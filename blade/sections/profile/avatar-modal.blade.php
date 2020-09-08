<div id="avatar-modal" class="modal-dialog hidden opacity-0 fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="modal-container bg-white cursor-auto z-60 sm:mx-3 lg:mx-0 w-full rounded-lg overflow-hidden flex flex-col">
        <h2 class="p-8 font-bold text-2xl">Edit: Profile Picture</h2>
        <div class="flex-1 flex pb-4 sm:pb-0">
            <settings-profile-image :is-avatar="true"></settings-profile-image>
        </div>
    </div>
</div>
