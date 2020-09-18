<div id="{{ $id }}" class="modal-dialog hidden fixed top-0 left-0 right-0 bottom-0 opacity-0 items-center justify-center z-55">
    <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
    <div class="modal-container bg-white cursor-auto z-60 sm:w-small mx-3 md:mx-0 rounded-lg">
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
                        @component('musora-ui::utilities.button', [
                            'inputId' => 'save-' . $id,
                            'labelText' => 'save',
                            'type' => 'submit',
                            'extraSmallCollapse' => true,
                        ])
                        @endcomponent
                    </div>
                    <div>
                        @component('musora-ui::utilities.button', [
                            'inputId' => 'cancel-' . $id,
                            'classes' => ['close-modal'],
                            'labelText' => 'cancel',
                            'type' => 'reset',
                            'theme' => 'white',
                            'inputId' => 'cancel-' . $id,
                            'extraSmallCollapse' => true,
                        ])
                        @endcomponent
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
