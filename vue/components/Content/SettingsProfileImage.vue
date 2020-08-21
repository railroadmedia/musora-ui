<template>
    <div class="profile-avatar flex-1 flex">
        <div
            v-show="!$_hasFileToCrop"
            ref="uploader"
            class="cursor-pointer flex-1 flex"
        >
            <div class="flex-1 flex flex-col items-center justify-center space-y-4 dz-message">
                <button class="drag-button hidden px-10 py-3 rounded-full border-2 border-black bg-black text-white uppercase font-bold"><i class="fas fa-upload mr-1"></i>drop to upload</button>
                <button class="choose-button px-10 py-3 rounded-full border-2 border-black uppercase font-bold"><i class="fas fa-upload mr-1"></i>choose a photo</button>
                <p class="italic text-gray text-xs">Max file size: <span class="font-bold">5MB</span></p>
                <p v-if="dropZoneError" class="italic text-red-600">{{ dropZoneError }}</p>
            </div>
        </div>
        <div class="dz-hidden-input"></div>
        <div
            v-show="$_hasFileToCrop"
            class="relative flex-1 flex flex-col"
        >
            <div class="" style="height: 370px;" :class="{invisible: croppedImage}">
                <canvas
                    id="imgToCrop"
                    ref="cropper"
                ></canvas>
            </div>

            <div
                class="p-3 flex items-center justify-between bg-light-gray"
                v-show="!croppedImage"
            >
                <a
                    class="bg-light-gray border-2 border-medium-gray text-medium-gray py-3 px-16 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block cursor-pointer leading-none"
                    @click="resetCrop"
                >Cancel</a>

                <div class="flex">
                    <a
                        class="bg-dark-gray text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block mx-1 cursor-pointer flex items-center justify-center"
                        style="height: 40px; width: 40px;"
                        @click="zoomOut"
                    ><i class="far fa-search-minus"></i></a>

                    <a
                        class="bg-dark-gray text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block mx-1 cursor-pointer flex items-center justify-center"
                        style="height: 40px; width: 40px;"
                        @click="zoomIn"
                    ><i class="far fa-search-plus"></i></a>

                    <a
                        class="bg-dark-gray text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-edge-blue uppercase inline-block mx-1 cursor-pointer flex items-center justify-center"
                        style="height: 40px; width: 40px;"
                        @click="rotate"
                    ><i class="fas fa-redo-alt"></i></a>
                </div>

                <a
                    class="bg-edge-blue border-2 border-edge-blue text-white py-3 px-16 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block cursor-pointer leading-none"
                    @click="cropImage"
                >Crop</a>
            </div>

            <div
                v-show="croppedImage"
                class="absolute top-0 left-0 h-full w-full flex flex-col bg-white"
            >
                <div class="flex-1 flex items-center justify-center">
                    <img
                        :src="croppedImage"
                        :class="$_previewClasess"
                        style="max-width: 250px;"
                    >
                </div>
                <div class="p-4 flex-none flex items-center justify-between">
                    <a
                        class="py-3 px-16 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block cursor-pointer hover:bg-light-gray leading-none"
                        :disabled="loading"
                        @click="cancelCrop"
                    ><i class="fas fa-chevron-left"></i> Back</a>

                    <a
                        class="bg-edge-blue border-2 border-edge-blue text-white py-3 px-16 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block cursor-pointer leading-none"
                        @click="uploadImage"
                    >Save</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import 'cropperjs/dist/cropper.css';
import CropperMixin from '../../mixins/cropper';

export default {
    mixins: [CropperMixin],
    mounted() {
    },
    props: {
        dropzoneConfig: {
            type: Object,
            default: () => ({
                url: ' ',
                dictDefaultMessage: '<button class="choose-button px-10 py-3 rounded-full border-2 border-black uppercase font-bold"><i class="fas fa-upload mr-1"></i>choose a photo</button><p class="italic text-gray text-xs">Max file size: <span class="font-bold">5MB</span></p>',
                dictFileTooBig: 'Maximum file size of 5MB exceeded.',
                dictInvalidFileType: 'Invalid File Type.',
                acceptedFiles: '.jpg,.jpeg,.png,.bmp',
                maxFilesize: 5,
                hiddenInputContainer: '.dz-hidden-input',
                autoProcessQueue: false,
            }),
        },
    },
    computed: {
        $_previewClasess() {
            return this.isAvatar ? 'rounded-full' : '';
        },
    },
    methods: {
    },
}
</script>
<style type="text/css">
.profile-avatar .dz-preview {
    display: none;
}
.dz-clickable.dz-drag-hover .choose-button {
    display: none;
}
.dz-clickable.dz-drag-hover .drag-button {
    display: block;
}
</style>
