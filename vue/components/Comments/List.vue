<template>
    <div>
        <div>comments brief</div>
        <new-comment
            :current-user="user"
            v-if="user"
        ></new-comment>
        <div>comments list</div>
    </div>
</template>

<script lang="ts">
import UserService from '../../services/users';
import NewComment from '../../components/Comments/New';

export default {
    components: {
        'new-comment': NewComment,
    },
    props: {
        currentUserData: {
            type: Object,
        },
        commentsList: {
            type: Array,
        },
    },
    data(): object {
        return {
            user: undefined,
        };
    },
    mounted(): void {
        this.user = UserService.getUserFromObject(this.currentUserData);
    },
};
</script>
