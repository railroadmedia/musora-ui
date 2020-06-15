<template>
    <div class="py-4 small:py-0 w-full small:w-1/3 medium:w-1/4 large:w-1/5 x-large:w-1/6">
        <a href="#" class="video-card">
            <div class="relative">

                <div class="rounded-lg overflow-hidden">
                    <img src="https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg">
                </div>

                <div class="teacher-name absolute rounded-lg bottom-0 left-0 right-0 pt-6 pb-3 px-4 text-white uppercase text-xs font-bold font-roboto">
                    Instructor one
                </div>

                <div class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer z-20">
                    <i class="icon-add-to-list text-white"></i>
                </div>
                <div class="video-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10">
                    <i class="icon-live text-white text-3xl"></i>
                </div>
            </div>
            <div class="pt-2">
                <div class="py-1 text-xs text-dark-gray uppercase flex items-center font-semibold"> content type</div>
                <h3 class="pb-1 font-bold capitalize">Continue Video One</h3>
                <p class="text-xs text-medium-gray">Beginner - 1</p>
            </div>
        </a>
    </div>
</template>
<script>
    export default {
        name: 'LargeContentListItem',
        computed: {},
        beforeDestroy() {
        },
    };
</script>
<style type="text/css">
    .video-card-play {
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        background-color: rgba(0, 0, 0, .4);
    }

    .video-card:hover .video-card-play {
        visibility: visible;
        opacity: 1;
    }

    .video-card .teacher-name {
        background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(#000));
        background: linear-gradient(180deg, transparent 0, #000);
    }
</style>