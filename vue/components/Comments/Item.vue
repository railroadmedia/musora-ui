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
                    class="avatar-icon absolute bottom-0 left-0 w-full flex justify-center"
                    :class="$_avatarIconBgClass"
                    v-if="$_avatarMembershipIcon"
                ><i class="text-white" :class="$_avatarIconClass" v-if="$_avatarIconClass"></i></div>
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
                            <i class="fal fa-thumbs-up mr-1"></i>
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
                        ><i class="fal fa-reply mr-1"></i><span class="text-xs font-semibold">reply</span></a>
                        <a
                            href="#"
                            class="mx-6 text-edge-blue uppercase flex items-center"
                            @click.stop.prevent="closeReply()"
                            v-if="replying"
                        ><i class="fal fa-reply mr-1"></i><span class="text-xs font-semibold">replying</span></a>
                    </div>
                    <div class="mb-2 sm:mb-0 text-medium-gray uppercase text-xs">{{ getDate() }}</div>
                </div>
            </div>
        </div>
        <div v-if="replying" class="sm:ml-20 sm:pl-6">
            <new-comment
                :current-user="currentUser"
                :to-comment="parentComment || comment"
                :content-id="contentId"
            ></new-comment>
        </div>
    </div>
</template>

<script lang="ts">
import Comment from '../../models/comment';
import User from '../../models/user';
import NewComment from './New';
import { DateTime } from 'luxon';

import CommentMixin from '../../mixins/comment';

export default {
    components: {
        'new-comment': NewComment,
    },
    mixins: [CommentMixin],
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

        getAuthor() {
            return this.comment.author;
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

        getDate(): string {
            return DateTime.fromSQL(this.comment.added).toRelative();
        },
    },
    mounted(): void {
        this.$root.$on('closeReply', this.closeReply);
    },
}
</script>
<style type="text/css">
.avatar-icon {
    height: 16px;
}
.avatar-icon.logo-team {
    background-size: 30%;
    background-position: 50%;
    background-repeat: no-repeat;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjAwIDY0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMS40MTQiPjxwYXRoIGQ9Ik0zMi44MTYgNjMuOEgxNS41NzlWMTQuMDk1SDBWMGg0OC4zNTJ2MTQuMDk1SDMyLjgxNlY2My44ek0xMjQuNDUgNjMuODM4bC0zLjEzMS0xMS45MTVoLTIwLjY1NmwtMy4yMTggMTEuOTE1SDc4LjU3Mkw5OS4zMTUgMGgyMi45MTdsMjEuMDA0IDYzLjgzOEgxMjQuNDV6bS02LjY5Ny0yNi4wMDVsLTIuNzM5LTEwLjQzN2EzNzkuOCAzNzkuOCAwIDAxLTIuMzI3LTkuMDAxYy0uOTEzLTMuNjgyLTEuNTE1LTYuMzItMS44MDUtNy45MTUtLjI2IDEuNDc5LS43NzUgMy45MTQtMS41NDMgNy4zMDYtLjc2OSAzLjM5Mi0yLjQ3MiAxMC4wNzQtNS4xMSAyMC4wNDdoMTMuNTI0eiIgZmlsbC1ydWxlPSJub256ZXJvIiBmaWxsPSIjZmZmIi8+PHBhdGggZD0iTTg4LjI1NCAxMy44NDJINjcuNnYxMC4wNDNoMTAuNDIzdjEzLjg0MUg2Ny42djEyLjA1MmgxM0w3Ni4yNjEgNjMuMTNhMi4zMzIgMi4zMzIgMCAwMC0uMDc3LjcwOEg1MC4zNTNWMGgzNy45MDF2MTMuODQyem0tNS4yNDYgMzUuOTM2aDUuMjQ2djE0LjA2aC05LjgxNWw0LjU2OS0xNC4wNnpNMTM1LjE1MSAzMS41MTZWMGgyMi45NTRsOS41NzIgMzIuNTc0TDE3Ny4wMzEgMGgyMi45OTd2NjMuOGgtMTUuODQxVjM1LjgyN2MwLTEuNDU0LjAyMi0zLjA2OS4wNjYtNC44NDMuMDQzLTEuNzc1LjI0LTYuMTI0LjU4OS0xMy4wNDhoLS4zOTNMMTcxLjU3NiA2My44aC04LjYyN2wtMTMuMDQ4LTQ1Ljk1MmgtLjM5MmMuNjExIDcuODI2LjkxNiAxMy45MDcuOTE2IDE4LjI0MVY2My44aC00LjgwOGEyLjMwNyAyLjMwNyAwIDAwLS4wNzktLjcxNWwtMTAuMzg3LTMxLjU2OXptMCA3LjMyM2w4LjIxMyAyNC45NjFoLTguMjEzVjM4LjgzOXoiIGZpbGwtcnVsZT0ibm9uemVybyIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==);
}
.avatar-icon.logo-edge {
    background-size: 30%;
    background-position: 50%;
    background-repeat: no-repeat;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDM3IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMS40MTQiPjxwYXRoIGQ9Ik03Mi44MzEgMjIuNzg5aC04Ljc2MlYxNy43NmgxNC40ODhjLjAwNy4wMzQuMDIxLjA3LjAyMS4xMDcuMDE3IDEuOTA3LS4wNjYgMy44MDUtLjM2MiA1LjY5NS0uNTA3IDMuMjM1LTEuOTE3IDUuOTk5LTQuMTY5IDguMzUxLTEuODUzIDEuOTM1LTQuMDIgMy4zNjctNi41NzMgNC4xODktMi4xMTguNjgzLTQuMjkzLjg5LTYuNTA3Ljc2My0yLjI0My0uMTI4LTQuMzg0LS42NTYtNi40MDktMS42MzgtMS43MzgtLjg0My0zLjI4LTEuOTY2LTQuNjYzLTMuMzE0YTE5LjQ5MiAxOS40OTIgMCAwMS0yLjg3MS0zLjUwNmMtLjAyMS0uMDMyLS4wNDctLjA1OS0uMDU5LS4wNzQtLjQ1NS42MTMtLjg3NyAxLjI0OS0xLjM2NiAxLjgyOC0yLjQyIDIuODY2LTUuMzUyIDQuOTYzLTkuMDA3IDUuOTQ0LTEuNjAzLjQzLTMuMjQ0LjY1NC00Ljg5Ni42ODUtMy40LjA2My02LjguMDYtMTAuMi4wODMtLjA2MiAwLS4xMjMtLjAxLS4xOTUtLjAxNlYuMDA4aC4yNjFjMi43MjkgMCA1LjQ1OC0uMDIgOC4xODcuMDA2IDIuMzk4LjAyMyA0Ljc4NS4xOTkgNy4xMTIuODQ0IDQuMzU0IDEuMjA2IDcuNjY5IDMuODA1IDEwLjA4NSA3LjYwNWwuMDkzLjE0Yy4wNTItLjA3NS4wOTYtLjEzNS4xMzctLjE5NiAyLjExOC0zLjEwMiA0LjgyMS01LjUwNyA4LjI5NS02Ljk4NEM1Ny4zOS42MDggNTkuNC4xODcgNjEuNDc2LjA4MWM0LjgwNi0uMjQ1IDkuMDk4IDEuMDYyIDEyLjcxMiA0LjMyOC45NDQuODUzIDEuODA1IDEuNzk5IDIuNzAzIDIuNzAzLjAzOC4wMzguMDY3LjA4NC4xMTQuMTQzbC0zLjc3NSAzLjY1NmMtLjE1Mi0uMTkzLS4yOTYtLjM3OS0uNDQzLS41NjItMS4zMjQtMS42NS0yLjg1OC0zLjA0OS00Ljc1OS00LjAwOS0xLjg0MS0uOTI5LTMuNzk2LTEuMzA0LTUuODQ5LTEuMjM0LTIuNzI0LjA5My01LjIwNy44ODktNy4zNjkgMi41NzktMi41NDYgMS45OTEtNC4yNzkgNC41MjYtNC45MTIgNy43MzUtLjYyNiAzLjE3Ni0uNDAyIDYuMjc0IDEuMDY4IDkuMjA5IDEuMDU2IDIuMTA5IDIuNjU3IDMuNzMyIDQuNTc5IDUuMDUzIDEuNTA2IDEuMDM1IDMuMTQ3IDEuNzUgNC45NiAyLjAyOSAzLjMzMS41MTIgNi4yOC0uMzMzIDguODQxLTIuNTI5IDEuNTc4LTEuMzUzIDIuNzI0LTIuOTk0IDMuMjI4LTUuMDQxLjEwNy0uNDM0LjE2OS0uODguMjU3LTEuMzUyem03LjE5OCAxNC4wNjhoLS4yOVYuMDEyYy4wODktLjAwNS4xNjYtLjAxMS4yNDMtLjAxMWgxOS43MTdjLjA2MyAwIC4xMjYuMDA0LjE4OS4wMDd2NS4yNDNjLS4wODYtLjAwOC0uMTcxLS4wMjMtLjI1Ny0uMDIzbC0xNC4wNy0uMDAxaC0uMjh2OC44NThoNy45OTVjLS4wMzMuMDY0LS4wNDcuMS0uMDY4LjEzMS0xLjEgMS42NTctMi4xOTkgMy4zMTUtMy4zMDggNC45NjYtLjA1MS4wNzctLjE5Mi4xMy0uMjkxLjEzMS0xLjM1My4wMDgtMi43MDUuMDA1LTQuMDU4LjAwNWgtLjI2OVYzMS42M2guMjc5bDE0LjA3LS4wMDFjLjA4NiAwIC4xNzEtLjAxNC4yNTctLjAyMnY1LjI0MmMtLjA4Ny4wMDMtLjE3NC4wMDgtLjI2LjAwOEg4MC4wMjl6TTIwLjEzNSA1LjIzNEg1LjUydjguODU1aDguMDE0Yy0uMDUxLjA5NC0uMDc5LjE1NC0uMTE2LjIwOC0xLjA3OSAxLjYyNC0yLjE2MSAzLjI0Ni0zLjIzNyA0Ljg3My0uMDg3LjEzMi0uMTgyLjE2OC0uMzMuMTY3LTEuMzQ0LS4wMDQtMi42ODktLjAwMy00LjAzMy0uMDAzSDUuNTJ2MTIuMzEyaDE0LjYydjUuMjA5SDBWLjAyMmgyMC4xMzV2NS4yMTJ6bTYuNjgxIDI2LjQxM2wuMjcyLS4wMDEgMi41ODUtLjAxNmMxLjM1NC0uMDEgMi43MDItLjA5IDQuMDMyLS4zNTUgNC40MTUtLjg4IDcuNTcyLTMuMzk2IDkuMjg0LTcuNTU5IDEuMzgyLTMuMzYxIDEuMzI2LTYuODQuMTQ2LTEwLjI2Ny0uODY5LTIuNTIyLTIuNDUtNC41MzUtNC42ODgtNS45OS0xLjkyNi0xLjI1MS00LjA5MS0xLjgwMi02LjM0My0yLjA2NS0xLjcwOS0uMi0zLjQyNS0uMTQyLTUuMTQtLjE1LS4wNDUtLjAwMS0uMDkxLjAwNS0uMTQ4LjAxdjI2LjM5M3oiIGZpbGwtcnVsZT0ibm9uemVybyIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==);
}
</style>
