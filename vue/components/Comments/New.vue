<template>
    <div class="flex flex-col sm:flex-row my-8">
        <div class="self-center sm:self-auto rounded-full overflow-hidden h-20 w-20 relative">
            <div
                    class="rounded-full overflow-hidden border-4 h-20 w-20"
                    :class="$_borderColorClass"
                >
                <img :src="currentUser.avatar" class="h-full w-auto">
            </div>
            <div
                    class="absolute bottom-0 left-0 w-full flex justify-center"
                    :class="$_avatarIconBgClass"
                    v-if="$_avatarIconClass"
                ><i class="text-white" :class="$_avatarIconClass"></i></div>
        </div>
        <div class="flex-1 flex flex-col">
            <div class="mt-4 sm:mt-0 sm:ml-16">
                <text-editor
                    ref="textEditor"
                    v-model="replyInterface"
                    toolbar="bold italic underline | bullist numlist | link"
                    :height="150"
                ></text-editor>
            </div>
            <div class="pt-4 sm:pt-2 flex flex-col-reverse items-center sm:flex-row sm:justify-end sm:space-x-3">
                <button-input
                    v-if="toComment"
                    label="cancel"
                    theme="blue-reversed"
                    :fixed-width="true"
                    @click="cancel()"
                ></button-input>
                <div class="sm:hidden my-1"></div>
                <button-input
                    :label="$_submitButtonLabel"
                    :fixed-width="true"
                    @click="addComment()"
                ></button-input>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import User from '../../models/user';
import Button from '../Blocks/Button';
import TextEditor from '../Blocks/TextEditor';

import CommentMixin from '../../mixins/comment';

export default {
    components: {
        'button-input': Button,
        'text-editor': TextEditor,
    },
    mixins: [CommentMixin],
    props: {
        currentUser: {
            type: User,
        },
        toComment: {},
        contentId: {
            type: Number,
        },
    },
    computed: {
        $_submitButtonLabel(): string {
            let label = 'comment';

            if (this.toComment) {
                label = 'reply';
            }

            return label;
        },

        replyInterface: {
            get() {
                return this.comment;
            },
            set(val) {
                this.comment = val;
            },
        },
    },
    data(): object {
        return {
            comment: '',
        };
    },
    methods: {
        getAuthor() {
            return this.currentUser;
        },

        cancel() {
            this.$root.$emit('closeReply', {});
        },

        addComment() {
            this.$root.$emit(
                'addComment',
                {
                    'parrentComment': this.toComment,
                    'author': this.currentUser,
                    'comment': this.comment,
                    'contentId': this.contentId,
                }
            );
        },
    },
};
</script>
