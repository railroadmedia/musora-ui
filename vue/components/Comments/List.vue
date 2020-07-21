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
import PaginationModel from '../../models/pagination';

export default {
    components: {
        'new-comment': NewComment,
        'comment-list-item': CommentListItem,
    },
    props: {
        currentUserData: {
            type: Object,
        },
        contentId: {
            type: Number,
        },
        commentsData: {
            type: String
        },
    },
    data(): object {
        return {
            user: undefined,
            comments: [],
            initialSort: 'newest',
            brief: {
                count: 0,
                sort: 'Newest First'
            },
            sortOptions: ['newest', 'oldest', 'popularity', 'trending', 'relevance'],
            pagination: new PaginationModel(100, 1, this.initialSort),
        };
    },
    mounted(): void {
        this.user = UserService.getUserFromObject(this.currentUserData);
        this.brief.count = this.comments.length;

        let preloadData = JSON.parse(this.commentsData);
        
        this.setupComments(preloadData);
        this.setupPagination(preloadData);

        console.log("Comments\\List::mounted comments: %s", JSON.stringify(this.comments));

        this.$root.$on('addComment', this.addComment);
    },
    methods: {
        addComment(data) {
            // todo - add API call
            console.log("Comments\\List::addComment data: %s", JSON.stringify(data));

            this.$root.$emit('closeReply', {});

            if (data.parrentComment) {
                CommentsService
                    .reply(data.parrentComment, data.comment.currentValue)
                    .then(response => {
                        this.fetchData();
                    });
            } else {
                CommentsService
                    .addComment(data.contentId, data.comment.currentValue, data.author.name)
                    .then(response => {
                        this.fetchData();
                    });
            }
        },

        getPayload() {
            let payload = {
                content_id: this.contentId,
                limit: this.pagination.limit,
                page: this.pagination.page,
                sort: this.pagination.sort,
            };

            return payload;
        },

        fetchData() {
            let payload = this.getPayload();

            CommentsService
                .getComments(payload)
                .then(response => {
                    this.setupComments(response.data);
                    this.setupPagination(response.data);
                });
        },

        setupComments(response) {
            this.comments = CommentsService.getCommentsFromResponse(response);
        },

        setupPagination(response) {
            if (response.meta && response.meta.pagination) {
                let pagination = response.meta.pagination;
                this.pagination.total = pagination.total;
                this.pagination.limit = pagination.per_page;
                this.pagination.page = pagination.current_page;
                this.pagination.pages = pagination.total_pages;
            }
        },

        toggleLike(data) {
            // todo - add API call
            console.log("Comments\\List::toggleLike data: %s", JSON.stringify(data));

            // todo - to be updated
        },
    },
};
</script>
