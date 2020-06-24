<template>
    <div>new comment</div>
</template>

<script lang="ts">
import User from '../../models/user';

export default {
    props: {
        currentUser: {
            type: User,
        },
    },
    data(): object {
        return {
        };
    },
    mounted(): void {
    }
};
</script>
