@push('styles')
<style type="text/css">
@media screen and (min-width:40rem) {
    #gear-modal .modal-container {
        height: 540px;
        width: 800px;
    }
}
</style>
@endpush

<div id="gear-modal" class="modal-form hidden opacity-0 fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="modal-container bg-white cursor-auto z-60 sm:mx-3 lg:mx-0 w-full rounded-lg overflow-hidden flex flex-col">
        <h2 class="p-8 font-bold text-2xl">Edit: Gear Photo</h2>
        <div class="flex-1 flex pb-4 sm:pb-0">
            <settings-profile-image :aspect-ratio="1.78" :is-avatar="false"></settings-profile-image>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
let gearModalElement = document.getElementById('gear-modal')

gearModalElement.addEventListener(
    'click',
    function(event) {

        gearModalElement.classList.remove('active');

        event.preventDefault();
        event.stopPropagation();
    }
);

gearModalElement
    .querySelectorAll('.modal-container')[0]
    .addEventListener(
        'click',
        function(event) {
            // event.preventDefault(); // conflicts with input type=file, preventing file browser from opening
            event.stopPropagation();
        }
    );
</script>
@endpush
