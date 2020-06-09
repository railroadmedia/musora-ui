<div>
    @include('sections.comments-new')

    <div>
        @foreach ($comments as $comment)
            <div class="py-3">
                @component('core.comment', $comment)
                @endcomponent
            </div>

            @if (isset($comment['replies']) & count($comment['replies']))
                <div class="sm:ml-20 pl-6">
                    @foreach ($comment['replies'] as $reply)
                        <div class="py-3">
                            @component('core.comment', $reply)
                            @endcomponent
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
</div>
