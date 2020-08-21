import Cropper from 'cropperjs';
import Dropzone from 'dropzone';

export default {
    props: {
        aspectRatio: {
            type: Number,
            default: () => 1,
        },

        isAvatar: {
            type: Boolean,
            default: () => false,
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
            loading: false,
        };
    },
    computed: {
        $_hasFileToCrop() {
            return this.fileToCrop !== null;
        },

        $_imageDimensions() {
            if (this.isAvatar) {
                return {
                    width: 500,
                    height: 500,
                };
            }

            return {
                width: 1280,
                height: (1280 / this.aspectRatio),
            };
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

        console.log(
            'cropper::mounted isAvatar: %s, aspectRatio: %s, $_imageDimensions: %s',
            JSON.stringify(this.isAvatar),
            JSON.stringify(this.aspectRatio),
            JSON.stringify(this.$_imageDimensions)
        );
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
            const canvasOutput = this.cropperInstance.getCroppedCanvas(this.$_imageDimensions);

            canvasOutput.toBlob((blob) => {
                this.imageBlob = blob;
            });

            this.croppedImage = canvasOutput.toDataURL(url => URL.createObjectURL(url));
        },

        uploadImage() {
        },
    }
}
