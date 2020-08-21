<div class="p-8 border-b border-gray">
    <div class="flex items-center py-1">
        <h2 class="flex-1 leading-none text-2xl font-bold capitalize">when would you like to receive email notifications?</h2>
    </div>
    <div class="flex py-2">
        @component(
            'core.toggle-input',
            [
                'labelText' => 'Weekly Community Updates.',
                'inputName' => 'notify_weekly_update',
                'inputValue' => $data['notify_weekly_update'],
            ]
        )
        @endcomponent
    </div>
    <div class="flex py-2">
        @component(
            'core.toggle-input',
            [
                'labelText' => 'When a user replies to my comment.',
                'inputName' => 'notify_on_lesson_comment_reply',
                'inputValue' => $data['notify_on_lesson_comment_reply'],
            ]
        )
        @endcomponent
    </div>
    <div class="flex py-2">
        @component(
            'core.toggle-input',
            [
                'labelText' => 'When a user likes my comment.',
                'inputName' => 'notify_on_lesson_comment_like',
                'inputValue' => $data['notify_on_lesson_comment_like'],
            ]
        )
        @endcomponent
    </div>
    <div class="flex py-2">
        @component(
            'core.toggle-input',
            [
                'labelText' => 'When a user replies to my forum posts',
                'inputName' => 'notify_on_forum_followed_thread_reply',
                'inputValue' => $data['notify_on_forum_followed_thread_reply'],
            ]
        )
        @endcomponent
    </div>
    <div class="flex py-2">
        @component(
            'core.toggle-input',
            [
                'labelText' => 'When a user likes my forum posts',
                'inputName' => 'notify_on_forum_post_like',
                'inputValue' => $data['notify_on_forum_post_like'],
            ]
        )
        @endcomponent
    </div>
</div>