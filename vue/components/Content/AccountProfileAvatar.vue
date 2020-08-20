<template>
    <div class="profile-avatar">
        <div
            v-show="!hasFileToCrop"
            ref="uploader"
            class="cursor-pointer border-2 border-blue-600 rounded-full text-blue-600 mx-auto text-4xl flex flex-col justify-center"
            style="height: 120px; width: 120px;"
        >
            <i class="fal fa-plus dz-message"></i>
        </div>
        <div
            v-show="hasFileToCrop"
            class="relative"
        >
            <div class="" style="height: 260px;" :class="{invisible: croppedImage}">
                <canvas
                    id="imgToCrop"
                    ref="cropper"
                ></canvas>
            </div>

            <div
                class="mx-2 sm:mx-0 py-3 flex items-center justify-between"
                v-show="!croppedImage"
            >
                <a
                    class="bg-light-gray text-medium-gray py-1 px-6 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block text-sm cursor-pointer"
                    @click="resetCrop"
                >Cancel</a>

                <div class="inline-block">
                    <a
                        class="bg-dark-gray text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block mx-1 cursor-pointer"
                        style="height: 30px; width: 30px;"
                        @click="zoomOut"
                    >-</a>

                    <a
                        class="bg-dark-gray text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block mx-1 cursor-pointer"
                        style="height: 30px; width: 30px;"
                        @click="zoomIn"
                    >+</a>

                    <a
                        class="bg-dark-gray text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block mx-1 cursor-pointer"
                        style="height: 30px; width: 30px;"
                        @click="rotate"
                    >&#9851;</a>
                </div>

                <a
                    class="bg-edge-blue text-white py-1 px-6 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block text-sm cursor-pointer"
                    @click="cropImage"
                >Crop</a>
            </div>

            <div
                v-show="croppedImage"
                class="absolute top-0 left-0 w-full bg-white"
            >
                <div class="relative h-0" style="padding-bottom: 58%">
                    <img
                        :src="croppedImage"
                        class="rounded-full"
                        style="max-height: 100%; position: absolute; height: auto; top: 50%; left: 50%; transform: translate(-50%,-50%);"
                    >
                </div>
                <div class="mx-10 sm:mx-0 py-3 flex items-center justify-between">
                    <a
                        class="bg-gray-500 text-white py-1 px-6 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block text-sm cursor-pointer"
                        :disabled="loading"
                        @click="cancelCrop"
                    >Back</a>

                    <a
                        class="bg-blue-600 text-white py-1 px-6 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block text-sm cursor-pointer"
                        @click="uploadImage"
                    >Save</a>
                </div>
            </div>
        </div>

        <span class="dz-hidden-input"></span>
        <p v-if="dropZoneError" class="italic text-red-600">{{ dropZoneError }}</p>
    </div>
</template>

<script>
import 'cropperjs/dist/cropper.css';
import CropperMixin from '../../mixins/cropper';

export default {
    name: 'ProfileAvatar',
    mixins: [CropperMixin],
    props: {
        dropzoneConfig: {
            type: Object,
            default: () => ({
                url: ' ',
                dictDefaultMessage: '<i class="fal fa-plus dz-message"></i>',
                dictFileTooBig: 'Maximum file size of 5MB exceeded.',
                dictInvalidFileType: 'Invalid File Type.',
                acceptedFiles: '.jpg,.jpeg,.png,.bmp',
                maxFilesize: 5,
                hiddenInputContainer: '.dz-hidden-input',
                autoProcessQueue: false,
            }),
        },
    },
}
</script>
<style type="text/css">
.profile-avatar .dz-preview {
    display: none;
}
</style>
