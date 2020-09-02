@php
$countries = ['United States', 'Canada', 'United Kingdom'];
@endphp

<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg sm:text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'modal-settings-about'],
                'extraSmallCollapse' => true,
            ]
        )
        @endcomponent
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">full name</div>
        <div>{{ $data['inputs']['first_name'] }} {{ $data['inputs']['last_name'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">location</div>
        <div>{{ $data['inputs']['country'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">birthday</div>
        <div>{{ $data['inputs']['birthday'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">biography</div>
        <div>{{ $data['inputs']['biography'] }}</div>
    </div>

    @component(
        'core.modal-form',
        [
            'id' => 'modal-settings-about',
            'title' => 'Edit: About',
            'form' => $form,
        ]
    )
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-3">
            <div class="flex-1">
                @component('core.text-input', [
                    'labelText' => 'First Name',
                    'inputName' => 'first_name',
                    'inputValue' => $data['inputs']['first_name'],
                    'validationErrorText' => $errors['first_name'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
            <div class="flex-1">
                @component('core.text-input', [
                    'labelText' => 'Last Name',
                    'inputName' => 'last_name',
                    'inputValue' => $data['inputs']['last_name'],
                    'validationErrorText' => $errors['last_name'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
        </div>
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-3">
            <div class="flex-1">
                @component('core.select-input', [
                    'labelText' => 'Country',
                    'inputName' => 'country',
                    'inputValue' => $data['inputs']['country'],
                    'options' => $countries,
                    'validationErrorText' => $errors['country'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
            <div class="flex-1">
                @component('core.flatpickr-input', [
                    'labelText' => 'Birthday',
                    'inputName' => 'birthday',
                    'inputValue' => $data['inputs']['birthday'],
                    'inputId' => 'birthday',
                    'validationErrorText' => $errors['birthday'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
        </div>
        <div>
            @component('core.textarea-input', [
                'labelText' => 'Biography',
                'inputName' => 'biography',
                'inputValue' => $data['inputs']['biography'],
                'inputId' => 'biography',
                'validationErrorText' => $errors['biography'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
    @endcomponent
</div>
