<template>
    <div>
        <div class="border-t border-light-gray py-8">
            <div class="flex justify-between">
                <div>
                    <span class="uppercase text-medium-gray text-sm font-semibold">{{ brief.count }} comments</span>
                </div>
                <div>
                    <span class="text-medium-gray text-sm font-semibold">Sort by: </span>
                    <select
                        class="bg-white text-medium-gray text-sm"
                        v-model="brief.sort"
                    >
                        <option
                            v-for="option in sortOptions"
                            :key="option"
                            :value="option"
                        >{{ option }}</option>
                    </select>
                </div>
            </div>
            <new-comment
                :current-user="user"
                :content-id="contentId"
                v-if="user"
            ></new-comment>
        </div>
        <div>
            <div
                class="py-3"
                v-for="comment in comments"
                :key="comment.id"
            >
                <comment-list-item
                    :comment="comment"
                    :current-user="user"
                    :content-id="contentId"
                    @toggleLike="toggleLike"
                ></comment-list-item>

                <div
                    class="sm:ml-20 pl-6"
                    v-if="comment.replies && comment.replies.length > 0"
                >
                    <div
                        class="py-3"
                        v-for="reply in comment.replies"
                        :key="reply.id"
                    >
                        <comment-list-item
                            :comment="reply"
                            :parent-comment="comment"
                            :current-user="user"
                            :content-id="contentId"
                            @toggleLike="toggleLike"
                        ></comment-list-item>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import UserService from '../../services/users';
import CommentsService from '../../services/comments';
import NewComment from './New';
import CommentListItem from './Item';

export default {
    components: {
        'new-comment': NewComment,
        'comment-list-item': CommentListItem,
    },
    props: {
        currentUserData: {
            type: Object,
        },
        commentsList: {
            type: Array,
        },
        contentId: {
            type: Number,
        },
    },
    data(): object {
        return {
            user: undefined,
            comments: [],
            brief: {
                count: 0,
                sort: 'Newest First'
            },
            sortOptions: ['Alphabetical', 'Newest First'],
        };
    },
    mounted(): void {
        this.user = UserService.getUserFromObject(this.currentUserData);
        this.comments = CommentsService.getCommentsFromArray(this.commentsList);
        this.brief.count = this.comments.length;

        this.$root.$on('addComment', this.addComment);
    },
    methods: {
        addComment(data) {
            // todo - add API call
            console.log("Comments\\List::addComment data: %s", JSON.stringify(data));
            this.$root.$emit('closeReply', {});
        },

        toggleLike(data) {
            // todo - add API call
            console.log("Comments\\List::toggleLike data: %s", JSON.stringify(data));

            // todo - to be updated/removed
            let commentList = this.comments;

            if (data.parentComment) {
                this.comments.forEach((comment) => {
                    if (comment.id == data.parentComment.id) {
                        commentList = comment.replies;
                    }
                });
            }

            commentList.forEach((item) => {
                if (item.id == data.comment.id) {
                    item.likes = item.likes + (item.liked ? -1 : 1);
                    item.liked = !item.liked;
                }
            });
        },
    },
};
</script>
