@php
$years = array_reverse(range(1900, 2020));
@endphp

<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-lg sm:text-2xl font-bold capitalize">{{ $data['title'] }}</h2>
        @component(
            'musora-ui::core.anchor-button',
            [
                'id' => 'edit-gear',
                'labelText' => 'edit',
                'theme' => 'black',
                'classes' => ['modal-trigger'],
                'attrs' => ['data-target' => 'modal-settings-gear'],
                'extraSmallCollapse' => true,
            ]
        )
        @endcomponent
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">drumming since</div>
        <div>{{ $data['inputs']['drums_playing_since_year'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">drums</div>
        <div>{{ $data['inputs']['drums_gear_set_brands'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">cymbals</div>
        <div>{{ $data['inputs']['drums_gear_cymbal_brands'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">hardware</div>
        <div>{{ $data['inputs']['drums_gear_hardware_brands'] }}</div>
    </div>
    <div class="flex flex-wrap sm:flex-no-wrap py-2">
        <div class="profile-label font-bold capitalize">sticks</div>
        <div>{{ $data['inputs']['drums_gear_stick_brands'] }}</div>
    </div>

    @component(
        'musora-ui::core.modal-form',
        [
            'id' => 'modal-settings-gear',
            'title' => 'Edit: My Gear',
            'form' => $form,
        ]
    )
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-3">
            <div class="flex-1">
                @component('musora-ui::core.select-input', [
                    'labelText' => 'Drumming Since',
                    'inputName' => 'drums_playing_since_year',
                    'inputValue' => $data['inputs']['drums_playing_since_year'],
                    'options' => $years,
                    'validationErrorText' => $errors['biography'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
        </div>
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-3">
            <div class="flex-1">
                @component('musora-ui::core.text-input', [
                    'labelText' => 'Drum Set',
                    'inputName' => 'drums_gear_set_brands',
                    'inputValue' => $data['inputs']['drums_gear_set_brands'],
                    'validationErrorText' => $errors['drums_gear_set_brands'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
            <div class="flex-1">
                @component('musora-ui::core.text-input', [
                    'labelText' => 'Cymbals',
                    'inputName' => 'drums_gear_cymbal_brands',
                    'inputValue' => $data['inputs']['drums_gear_cymbal_brands'],
                    'validationErrorText' => $errors['drums_gear_cymbal_brands'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
        </div>
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-3">
            <div class="flex-1">
                @component('musora-ui::core.text-input', [
                    'labelText' => 'Hardware',
                    'inputName' => 'drums_gear_hardware_brands',
                    'inputValue' => $data['inputs']['drums_gear_hardware_brands'],
                    'validationErrorText' => $errors['drums_gear_hardware_brands'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
            <div class="flex-1">
                @component('musora-ui::core.text-input', [
                    'labelText' => 'Drumsticks',
                    'inputName' => 'drums_gear_stick_brands',
                    'inputValue' => $data['inputs']['drums_gear_stick_brands'],
                    'validationErrorText' => $errors['drums_gear_stick_brands'] ?? '',
                    'theme' => 'wire',
                ])
                @endcomponent
            </div>
        </div>
    @endcomponent
</div>
