<template>
    <div class="profile-avatar">
        <div
            v-show="!hasFileToCrop"
            ref="uploader"
            class="border-2 border-blue-600 rounded-full text-blue-600 mx-auto text-4xl flex flex-col justify-center"
            style="height: 120px; width: 120px;"
        >
            <i class="icon-add-to-list dz-message"></i>
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
                    class="bg-gray-500 text-white py-1 px-6 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block text-sm cursor-pointer"
                    @click="resetCrop"
                >Cancel</a>

                <div class="inline-block">
                    <a
                        class="bg-blue-600 text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block mx-1 cursor-pointer"
                        style="height: 30px; width: 30px;"
                        @click="zoomOut"
                    >-</a>

                    <a
                        class="bg-blue-600 text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block mx-1 cursor-pointer"
                        style="height: 30px; width: 30px;"
                        @click="zoomIn"
                    >+</a>

                    <a
                        class="bg-blue-600 text-white rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block mx-1 cursor-pointer"
                        style="height: 30px; width: 30px;"
                        @click="rotate"
                    >&#9851;</a>
                </div>

                <a
                    class="bg-blue-600 text-white py-1 px-6 rounded-full font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase inline-block text-sm cursor-pointer"
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
import Cropper from 'cropperjs';
import Dropzone from 'dropzone';

import 'cropperjs/dist/cropper.css';

export default {
    name: 'ProfileAvatar',
    props: {
        dropzoneConfig: {
            type: Object,
            default: () => ({
                url: ' ',
                dictDefaultMessage: '<i class="icon-add-to-list dz-message"></i>',
                dictFileTooBig: 'Maximum file size of 5MB exceeded.',
                dictInvalidFileType: 'Invalid File Type.',
                acceptedFiles: '.jpg,.jpeg,.png,.bmp',
                maxFilesize: 5,
                hiddenInputContainer: '.dz-hidden-input',
                autoProcessQueue: false,
            }),
        },
    },
    data() {
        return {
            fileToCrop: null,
            cropperConfig: {
                viewMode: 1,
                aspectRatio: this.aspectRatio,
                dragMode: 'move',
                autoCrop: true,
            },
            cropperInstance: null,
            dropZoneInstance: null,
            dropZoneError: null,
            croppedImage: null,
            imageBlob: null,
            imageDimensions: {
                width: 500,
                height: 500,
            },
            loading: false,
        };
    },
    computed: {
        hasFileToCrop() {
            return this.fileToCrop !== null;
        },
    },
    watch: {
        fileToCrop() {
            this.cropperInstance.replace(this.fileToCrop);
        },
    },
    mounted() {
        this.dropZoneInstance = new Dropzone(
            this.$refs.uploader,
            this.dropzoneConfig,
        );

        this.dropZoneInstance.on('thumbnail', (file) => {

            if (file.status !== 'error') {
                this.fileToCrop = file.dataURL;
                this.dropZoneError = null;
            }

            if (this.cropperInstance === null) {
                this.cropperInstance = new Cropper(
                    this.$refs.cropper,
                    this.cropperConfig,
                );
            }
        });

        this.dropZoneInstance.on('error', (file, errorMessage) => {
            this.dropZoneError = errorMessage;
        });
    },
    created() {
        Dropzone.autoDiscover = false;

        // Polyfill from https://developer.mozilla.org/en-US/docs/Web/API/HTMLCanvasElement/toBlob
        // Should hopefully give support to Edge and IOS Safari
        if (!HTMLCanvasElement.prototype.toBlob) {
            Object.defineProperty(HTMLCanvasElement.prototype, 'toBlob', {
                value(callback, type, quality) {
                    const canvas = this;
                    setTimeout(() => {
                        const binStr = atob(canvas.toDataURL(type, quality).split(',')[1]);

                                
                        const len = binStr.length;

                                
                        const arr = new Uint8Array(len);

                        for (let i = 0; i < len; i++) {
                            arr[i] = binStr.charCodeAt(i);
                        }

                        callback(new Blob([arr], { type: type || 'image/png' }));
                    });
                },
            });
        }
    },
    methods: {
        resetCrop() {
            this.fileToCrop = null;
            this.dropZoneInstance.removeAllFiles();
        },

        zoomIn() {
            this.cropperInstance.zoom(0.1);
        },

        zoomOut() {
            this.cropperInstance.zoom(-0.1);
        },

        rotate() {
            this.cropperInstance.rotate(90);
        },

        cancelCrop() {
            this.croppedImage = null;
        },

        cropImage() {
            const canvasOutput = this.cropperInstance.getCroppedCanvas(this.imageDimensions);

            canvasOutput.toBlob((blob) => {
                this.imageBlob = blob;
            });

            this.croppedImage = canvasOutput.toDataURL(url => URL.createObjectURL(url));
        },

        uploadImage() {
        },
    }
}
</script>
<style type="text/css">
.profile-avatar .dz-preview {
    display: none;
}
</style>
