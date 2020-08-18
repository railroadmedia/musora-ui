@push('styles')
<style type="text/css">
#modal-overlay {
    background-color: rgba(0,0,0,.6);
    transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    -webkit-transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    cursor: pointer;
}
#modal-overlay.active {
    opacity: 1;
}
</style>
@endpush

<div id="modal-overlay" class="invisible fixed top-0 left-0 right-0 bottom-0 z-55 opacity-0">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
</div>
