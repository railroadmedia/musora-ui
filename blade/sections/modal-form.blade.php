<div id="{{ $id }}" class="modal-form hidden fixed top-0 left-0 right-0 bottom-0 opacity-0 items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="modal-container bg-white cursor-auto z-60 w-xsmall h-64 rounded-lg">
        <h2 class="py-6 font-bold text-lg">
            <slot name="header">Modal title</slot>
        </h2>
        <div class="px-6">
            @foreach ($items as $item)
                <div>
                    @component('core.text-input', [
                        'inputName' => $item['name'],
                        'labelText' => $item['label'],
                        'inputValue' => $item['value'],
                        'theme' => 'gray',
                    ])
                    @endcomponent
                </div>
            @endforeach
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