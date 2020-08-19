<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'modal-settings-display-name']
            ]
        )
        @endcomponent
    </div>
    <div class="flex py-2">
        <div class="profile-label font-bold capitalize">display name</div>
        <div>{{ $data['inputs']['display_name'] }}</div>
    </div>
    <div class="text-xs text-medium-gray italic">This is the name other users will see on your profile, comments and forum posts.</div>

    @component(
        'core.modal-form',
        [
            'id' => 'modal-settings-display-name',
            'title' => 'Edit: Display Name',
            'form' => $form,
        ]
    )
        <div>
            @component('core.text-input', [
                'labelText' => 'Display Name',
                'inputName' => 'display_name',
                'inputValue' => $data['inputs']['display_name'],
                'validationErrorText' => $errors['display_name'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
    @endcomponent
</div>
