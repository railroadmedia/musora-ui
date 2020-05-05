<template>
    <div class="test">
        <slot></slot>
    </div>
</template>
<script>
import './assets/styles/drumeo.css';
import ProfileAvatar from './components/ProfileAvatar.vue'

export default {
    name: 'App',
    components: {
        ProfileAvatar
    }
}
</script>

<style>
</style>
