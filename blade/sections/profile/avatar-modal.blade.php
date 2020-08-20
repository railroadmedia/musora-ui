@push('styles')
<style type="text/css">
#avatar-modal .modal-container {
    height: 540px;
    width: 800px;
}
</style>
@endpush

<div id="avatar-modal" class="modal-form hidden opacity-0 fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="modal-container bg-white cursor-auto z-60 w-small rounded-lg overflow-hidden flex flex-col">
        <h2 class="p-8 font-bold text-2xl">Edit: Profile Picture</h2>
        <div class="flex-1 flex">
            <settings-profile-avatar></settings-profile-avatar>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
let element = document.getElementById('avatar-modal')

element.addEventListener(
    'click',
    function(event) {

        element.classList.remove('active');

        event.preventDefault();
        event.stopPropagation();
    }
);

element
    .querySelectorAll('.modal-container')[0]
    .addEventListener(
        'click',
        function(event) {
            event.preventDefault();
            event.stopPropagation();
        }
    );
</script>
@endpush
