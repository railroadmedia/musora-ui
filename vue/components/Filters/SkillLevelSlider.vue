<template>
    <div class="flex-1 rounded-lg overflow-hidden bg-edge-blue">
        <div
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"
        >
            <div class="flex-1"></div>
            <div class="flex-none font-bold font-roboto-cond uppercase">{{ title }}</div>
            <div class="flex-1 flex items-center pl-2"></div>
        </div>
        <div class="">
            <div class="px-2 py-6 small:px-6">
                <vue-slider
                    v-model="value"
                    min="1"
                    max="9"
                    marks
                    :tooltip="'none'"
                    :process-style="{ backgroundColor: '#fff', height: '12px' }"
                    :rail-style="{ backgroundColor: '#094A86', height: '12px' }"
                    :dot-style="{ 'box-shadow': '0 0 0 5px #0B76DB', width: '150%', height: '150%', transform: 'translateY(-18%)' }"
                >
                    <template v-slot:step="{ label, active }">
                        <div :class="['custom-step', { active }]"></div>
                    </template>
                </vue-slider>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import VueSlider from 'vue-slider-component'
import 'vue-slider-component/theme/default.css'

export default {
    components: {
        VueSlider
    },
    data(): object {
        return {
            title: 'set your skill level',
            value: 0
        };
    },
    methods: {
    },
    mounted(): void {
    }
};
</script>

<style>
    .custom-step {
        width: 100%;
        height: 100%;
        background-color: #0B76DB;
    }
    .custom-step.active {
        /*box-shadow: 0 0 0 3px #3498db;
        background-color: #3498db;*/
    }
</style>
