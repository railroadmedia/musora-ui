<template>
    <div class="flex flex-col sm:flex-row my-8">
        <div class="self-center sm:self-auto rounded-full overflow-hidden border-4 border-blue-500 h-20 w-20">
            <img :src="currentUser.avatar" class="h-full w-aut">
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
                    v-if="currentComment"
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

export default {
    components: {
        'button-input': Button,
        'text-editor': TextEditor,
    },
    props: {
        currentUser: {
            type: User,
        },
        currentComment: {},
        contentId: {
            type: Number,
        },
    },
    computed: {
        $_submitButtonLabel(): string {
            let label = 'comment';

            if (this.parentComment || this.currentComment) {
                label = 'reply';
            }

            return label;
        },

        replyInterface: {
            get() {
                return this.reply;
            },
            set(val) {
                console.log("replyInterface::set val: %s", JSON.stringify(val));
                this.reply = val;
            },
        },
    },
    data(): object {
        return {
            comment: '',
        };
    },
    methods: {
        cancel() {
            this.$root.$emit('closeReply', {});
        },

        addComment() {
            this.$root.$emit(
                'addComment',
                {
                    'parrentComment': this.currentComment,
                    'author': this.currentUser,
                    'comment': this.comment,
                    'contentId': this.contentId,
                }
            );
        },
    },
};
</script>
