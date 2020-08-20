import Cropper from 'cropperjs';
import Dropzone from 'dropzone';

export default {
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
        console.log("uploader: %s", JSON.stringify(this.$refs.uploader));
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
