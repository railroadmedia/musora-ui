<div id="{{ $id }}" class="modal hidden fixed top-0 left-0 right-0 bottom-0 opacity-0 items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="relative modal-container bg-white cursor-auto z-60 rounded-lg m-3 lg:m-0" style="width: 674px;">
        <div class="flex w-full justify-end">
            <div class="close-modal cursor-pointer mt-4 mr-4">
                <svg class="fill-current text-medium-gray" xmlns="http://www.w3.org/2000/svg" width="22"
                     height="22" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>
        </div>
        @if (isset($title) && $title)
            <h2 class="p-12 font-bold text-2xl">{{ $title }}</h2>
        @endif
        <div class="p-12 pt-0">
            {{ $slot }}
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">

document
    .getElementById('{{ $id }}')
    .addEventListener(
        'click',
        function(event) {

            document.getElementById('{{ $id }}').classList.remove('active');

            event.preventDefault();
            event.stopPropagation();
        }
    );

document
    .getElementById('{{ $id }}')
    .querySelectorAll('.close-modal')[0]
    .addEventListener(
        'click',
        function(event) {

            document.getElementById('{{ $id }}').classList.remove('active');

            event.preventDefault();
            event.stopPropagation();
        }
    );

document
    .getElementById('{{ $id }}')
    .querySelectorAll('.modal-container')[0]
    .addEventListener(
        'click',
        function(event) {
            event.stopPropagation();
        }
    );
</script>
@endpush
