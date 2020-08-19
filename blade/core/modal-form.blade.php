<div id="{{ $id }}" class="modal-form hidden fixed top-0 left-0 right-0 bottom-0 opacity-0 items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="modal-container bg-white cursor-auto z-60 w-small rounded-lg">
        <h2 class="p-6 font-bold text-2xl">{{ $title }}</h2>
        <div class="px-6">
            <form action="{{ $form['action'] }}" method="POST">
                @if (isset($form['method']) && $form['method'] == 'patch')
                    <!-- method_field($form['method']) -->
                @endif
                <!--  csrf_field() -->
                <div class="space-y-4">
                    {{ $slot }}
                </div>
                <div class="py-6 flex items-center space-x-3">
                    <div>
                        @component('core.button', [
                            'labelText' => 'save',
                            'type' => 'submit',
                        ])
                        @endcomponent
                    </div>
                    <div>
                        @component('core.anchor-button', [

                            'labelText' => 'cancel',
                            'type' => 'submit',
                            'theme' => 'white',
                            'id' => 'cancel-' . $id
                        ])
                        @endcomponent
                    </div>
                </div>
            </form>
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
    .getElementById('{{ "cancel-" . $id }}')
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