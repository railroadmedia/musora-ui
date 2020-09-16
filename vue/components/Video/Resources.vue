<template>
    <div class="w-full">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-6 sm:px-3 xl:px-0">
            <div class="px-3 sm:px-0 pb-6 sm:pb-0">
                <h1 class="text-white text-3xl font-bold">{{ title }}</h1>
                <div class="text-medium-gray">With {{ instructor }}</div>
            </div>
            <div class="flex-1 sm:flex-none flex flex-row justify-around">
                <div class="px-1">
                    <button class="px-1 flex flex-col space-y-2 text-medium-gray font-bold uppercase">
                        <i class="fal fa-thumbs-up"></i><span>{{ likes }}</span>
                    </button>
                </div>
                <div class="px-1">
                    <button class="px-1 flex flex-col space-y-2 text-medium-gray font-bold uppercase">
                        <i class="fas fa-share"></i><span>share</span>
                    </button>
                </div>
                <div class="px-1" v-if="!added">
                    <button class="px-1 flex flex-col space-y-2 text-medium-gray font-bold uppercase">
                        <i class="fas fa-plus"></i><span>add to list</span>
                    </button>
                </div>
                <div class="px-1" v-if="added">
                    <button class="px-1 flex flex-col space-y-2 text-edge-blue font-bold uppercase">
                        <i class="fas fa-times"></i><span>added</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-row items-center justify-between pt-4 pb-6 px-3 xl:px-0">
            <div>
            	<button-input
                    label="previous lesson"
                    theme="blue-reversed"
                    collapse-icon
                    icon-class="fas fa-chevron-left"
                ></button-input>
            </div>
            <div>
            	<button-input
                    label="next lesson"
                    theme="blue-reversed"
                    collapse-icon
                    right-icon-class="fas fa-chevron-right"
                ></button-input>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';

export default {
	components: {
        'button-input': Button,
    },
	data(): object {
        return {
            title: 'Sonor Drums - A Drumeo Documentary',
            instructor: 'Jared Falk',
            likes: 61,
            added: false,
        };
    },
}
</script>
