<template>
    <div class="flex flex-col sm:flex-row my-8">
        <div class="self-center sm:self-auto rounded-full overflow-hidden border-4 border-blue-500 h-20 w-20">
            <img :src="currentUser.avatar" class="h-full w-aut">
        </div>
        <div class="flex-1 flex flex-col">
            <div class="mt-4 sm:mt-0 sm:ml-16 rounded-lg overflow-hidden border border-gray">
                <div class="flex  sm:flex-row space-x-1 sm:space-x-4 bg-gray p-3">
                    <div class="flex divide-x divide-medium-gray border border-medium-gray rounded-lg">
                        <div class="rounded-l-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-edit text-lg"></i></div>
                        <div class="bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-info text-lg"></i></div>
                        <div class="rounded-r-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-home text-lg"></i></div>
                    </div>
                    <div class="flex divide-x divide-medium-gray border border-medium-gray rounded-lg">
                        <div class="rounded-l-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-grid text-lg"></i></div>
                        <div class="rounded-r-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-sort text-lg"></i></div>
                    </div>
                    <div class="border border-medium-gray rounded-lg bg-white text-dark-gray leading-none p-3 flex items-center justify-center"><i class="icon-notation-key text-lg"></i></div>
                </div>
                <div class="">
                    <textarea class="w-full h-full" rows="5" v-model="comment"></textarea>
                </div>
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

// todo - add text editor functionality

export default {
    components: {
        'button-input': Button,
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
