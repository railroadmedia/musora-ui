<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg md:text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'core.anchor-button',
            [
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'modal-account-email'],
                'extraSmallCollapse' => true,
                'collapse' => 'md',
            ]
        )
        @endcomponent
    </div>
    <div class="flex flex-wrap md:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">login email</div>
        <div>{{ $data['inputs']['email'] }}</div>
    </div>

    @component(
        'core.modal-form',
        [
            'id' => 'modal-account-email',
            'title' => 'Edit: Login Email',
            'form' => $form,
        ]
    )
        <div class="flex-1">
            @component('core.text-input', [
                'labelText' => 'Login Email',
                'inputName' => 'email',
                'inputType' => 'email',
                'inputValue' => $data['inputs']['email'],
                'validationErrorText' => $errors['email'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
        <div class="flex-1">
            @component('core.text-input', [
                'labelText' => 'Password',
                'inputName' => 'user_password',
                'inputType' => 'password',
                'inputValue' => '',
                'validationErrorText' => $errors['user_password'] ?? '',
                'theme' => 'wire',
            ])
            @endcomponent
        </div>
    @endcomponent
</div>
