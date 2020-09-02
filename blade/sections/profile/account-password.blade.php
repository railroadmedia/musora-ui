<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg md:text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'modal-account-password'],
                'extraSmallCollapse' => true,
                'collapse' => 'md',
            ]
        )
        @endcomponent
    </div>
    <div class="flex flex-wrap md:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">current password</div>
        <div>{{ $data['inputs']['password'] }}</div>
    </div>

    @component(
        'core.modal-form',
        [
            'id' => 'modal-account-password',
            'title' => 'Edit: Login Password',
            'form' => $form,
        ]
    )
        <div class="flex-1 pb-2">
            @component('core.text-input', [
                'labelText' => 'Current Password',
                'inputName' => 'current_password',
                'inputType' => 'password',
                'inputValue' => '',
                'validationErrorText' => $errors['current_password'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
        <div class="flex-1">
            @component('core.text-input', [
                'labelText' => 'New Password',
                'inputName' => 'new_password',
                'inputType' => 'password',
                'inputValue' => '',
                'validationErrorText' => $errors['new_password'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
        <div class="flex-1">
            @component('core.text-input', [
                'labelText' => 'Confirm Password',
                'inputName' => 'new_password_confirmation',
                'inputType' => 'password',
                'inputValue' => '',
                'validationErrorText' => $errors['new_password_confirmation'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
    @endcomponent
</div>
