<form method="{{ $form['method'] }}" action="{{ $form['action'] }}">
    <div class="p-8 border-b border-gray">
        <div class="flex items-center pt-1 pb-6">
            <h2 class="flex-1 leading-none text-lg md:text-2xl font-bold capitalize">when would you like to receive email notifications?</h2>
        </div>
        <div class="flex py-2">
            @component(
                'musora-ui::utilities.toggle-input',
                [
                    'labelText' => 'Weekly Community Updates.',
                    'inputId' => 'notify_weekly_update',
                    'inputName' => 'notify_weekly_update',
                    'inputValue' => $data['notify_weekly_update'],
                ]
            )
            @endcomponent
        </div>
        <!-- todo - add user edge membership condition to display the following settings -->
        <div class="flex py-2">
            @component(
                'musora-ui::utilities.toggle-input',
                [
                    'labelText' => 'When a user replies to my comment.',
                    'inputId' => 'notify_on_lesson_comment_reply',
                    'inputName' => 'notify_on_lesson_comment_reply',
                    'inputValue' => $data['notify_on_lesson_comment_reply'],
                    'skipScript' => true,
                ]
            )
            @endcomponent
        </div>
        <div class="flex py-2">
            @component(
                'musora-ui::utilities.toggle-input',
                [
                    'labelText' => 'When a user likes my comment.',
                    'inputId' => 'notify_on_lesson_comment_like',
                    'inputName' => 'notify_on_lesson_comment_like',
                    'inputValue' => $data['notify_on_lesson_comment_like'],
                    'skipScript' => true,
                ]
            )
            @endcomponent
        </div>
        <div class="flex py-2">
            @component(
                'musora-ui::utilities.toggle-input',
                [
                    'labelText' => 'When a user replies to my forum posts',
                    'inputId' => 'notify_on_forum_followed_thread_reply',
                    'inputName' => 'notify_on_forum_followed_thread_reply',
                    'inputValue' => $data['notify_on_forum_followed_thread_reply'],
                    'skipScript' => true,
                ]
            )
            @endcomponent
        </div>
        <div class="flex py-2">
            @component(
                'musora-ui::utilities.toggle-input',
                [
                    'labelText' => 'When a user likes my forum posts',
                    'inputId' => 'notify_on_forum_post_like',
                    'inputName' => 'notify_on_forum_post_like',
                    'inputValue' => $data['notify_on_forum_post_like'],
                    'skipScript' => true,
                ]
            )
            @endcomponent
        </div>
        <!-- end condition -->
    </div>
    <div class="p-8">
        <div class="flex items-center py-1">
            <h2 class="flex-1 leading-none text-lg md:text-2xl font-bold capitalize">would you like to use our legacy video player?</h2>
        </div>
        <div class="pt-4 pb-6">
            <p>Our video player may have compatibility issues with older devices and operating systems.</p>
            <p>We recommend switching to our legacy video player if you are experiencing playback issues.</p>
        </div>
        <div class="flex py-2">
            @component(
                'musora-ui::utilities.toggle-input',
                [
                    'labelText' => 'Use legacy video player.',
                    'inputId' => 'use_legacy_video_player',
                    'inputName' => 'use_legacy_video_player',
                    'inputValue' => $data['use_legacy_video_player'],
                    'skipScript' => true,
                ]
            )
            @endcomponent
        </div>
        <div class="flex pt-14 pb-2 items-center space-x-3">
            <div>
                @component('musora-ui::utilities.button', [
                    'labelText' => 'save',
                    'type' => 'submit',
                    'extraSmallCollapse' => true,
                    'collapse' => 'md',
                ])
                @endcomponent
            </div>
            <div>
                @component('musora-ui::utilities.anchor-button', [

                    'labelText' => 'cancel',
                    'type' => 'submit',
                    'theme' => 'white',
                    'id' => 'cancel-settings',
                    'extraSmallCollapse' => true,
                    'collapse' => 'md',
                ])
                @endcomponent
            </div>
        </div>
    </div>
</form>