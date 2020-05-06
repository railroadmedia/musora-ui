<template>
    <div class="m-auto max-w-md md:w-md">
        <div class="bg-white rounded-lg flex flex-wrap mt-8">
            <div class="m-10 w-full">
                <div class="mb-6">
                    <p class="text-sm">Musora-UI Vue prototypes.<br>Click the links below to load pages with components</p>
                </div>
                <div class="">
                    <ul>
                        <li>
                            <router-link to="/profile">Profile</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Index',
    components: {
    }
}
</script>
