<template>
    <div class="flex flex-col">
        <div class="flex">
            <div class="flex-none relative rounded-full overflow-hidden h-20 w-20 mr-6">
                <div
                    class="rounded-full overflow-hidden border-4 h-20 w-20"
                    :class="$_borderColorClass"
                >
                    <img :src="comment.author.avatar" class="h-full w-auto">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-full flex justify-center"
                    :class="$_avatarIconBgClass"
                    v-if="comment.author.iconClass"
                ><i class="text-white" :class="comment.author.iconClass"></i></div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col items-start sm:flex-row sm:items-center">
                    <div class="capitalize font-semibold">{{ comment.author.name }}</div>
                    <div class="sm:ml-2 rounded-lg px-3 bg-medium-gray uppercase text-xs text-white">{{ $_level }}</div>
                </div>
                <div class="my-2" v-html="comment.comment"></div>
                <div class="flex flex-col-reverse items-start sm:flex-row sm:items-center">
                    <div class="flex">
                        <a
                            href="#"
                            class="uppercase flex items-center"
                            :class="$_likeClasses"
                            @click.stop.prevent="toggleLike()"
                        >
                            <i class="icon-applause mr-1"></i>
                            <span class="text-xs font-semibold">{{ $_likeLabel }}</span>
                            <div
                                class="rounded-full flex items-center justify-center ml-1 w-5 h-5 bg-edge-blue text-white text-xs"
                                v-if="comment.likes > 0"
                            ><span class="leading-none">{{ comment.likes }}</span></div>
                        </a>
                        <a
                            href="#"
                            class="mx-6 text-medium-gray uppercase flex items-center"
                            @click.stop.prevent="showReply()"
                            v-if="!replying"
                        ><i class="icon-chat mr-1"></i><span class="text-xs font-semibold">reply</span></a>
                        <a
                            href="#"
                            class="mx-6 text-edge-blue uppercase flex items-center"
                            @click.stop.prevent="closeReply()"
                            v-if="replying"
                        ><i class="icon-chat mr-1"></i><span class="text-xs font-semibold">replying</span></a>
                    </div>
                    <div class="mb-2 sm:mb-0 text-medium-gray uppercase text-xs">{{ comment.added }}</div>
                </div>
            </div>
        </div>
        <div v-if="replying" class="sm:ml-20 sm:pl-6">
            <new-comment
                :current-user="currentUser"
                :current-comment="comment"
                :content-id="contentId"
            ></new-comment>
        </div>
    </div>
</template>

<script lang="ts">
import Comment from '../../models/comment';
import User from '../../models/user';
import NewComment from './New';

export default {
    components: {
        'new-comment': NewComment,
    },
    props: {
        comment: {
            type: Comment,
        },
        parentComment: {},
        currentUser: {
            type: User,
        },
        contentId: {
            type: Number,
        },
    },
    data(): object {
        return {
            replying: false,
        }
    },
    computed: {
        $_borderColorClass(): string[] {
            let borderColorClass = ['border-blue-500'];

            if (this.comment.author && this.comment.author.border && this.comment.author.border == 'yellow') {
                borderColorClass = ['border-yellow-500'];
            }

            return borderColorClass;
        },

        $_avatarIconBgClass(): string[] {
            let bgClass = ['bg-blue-500'];

            if (this.comment.author && this.comment.author.border && this.comment.author.border == 'yellow') {
                bgClass = ['bg-yellow-500'];
            }

            return bgClass;
        },

        $_likeClasses(): string[] {
            let classed = [];

            if (this.comment.liked) {
                classed.push('text-edge-blue');
            } else {
                classed.push('text-medium-gray');
            }

            return classed;
        },

        $_likeLabel(): string {
            let label = 'like';

            if (this.comment.liked) {
                label = 'liked';
            }

            return label;
        },

        $_level(): string {
            return this.comment.author.level == 'team' ? 'team' : 'level - ' + this.comment.author.level;
        },
    },
    methods: {
        showReply() {
            this.$root.$emit('closeReply', {});
            this.replying = true;
        },

        closeReply() {
            this.replying = false;
        },

        toggleLike() {
            this.$emit(
                'toggleLike',
                {
                    'comment': this.comment,
                    'parentComment': this.parentComment,
                    'contentId': this.contentId,
                }
            );
        },
    },
    mounted(): void {
        this.$root.$on('closeReply', this.closeReply);
    },
}
</script>
