<template>
    <div>
        <h2 class="font-extrabold text-lg font-roboto text-center uppercase mb-6">set your skill level</h2>
        <div>
            <vue-slider
                v-model="value"
                marks
                lazy
                :min="1"
                :max="9"
                :height="10"
                :dot-size="[24, 24]"
                :tooltip="'none'"
                :hide-label="true"
                :step-style="{ backgroundColor: '#0B76DB' }"
                :process-style="{ backgroundColor: '#0B76DB' }"
                :rail-style="{ backgroundColor: '#ebf8ff', border: '2px solid #0B76DB' }"
                :dot-style="{ backgroundColor: '#0B76DB', boxShadow: '0 0 0 3px #fff' }"
            >
                <template v-slot:step="{ label, active }">
                    <div :class="['custom-step', { active }, 'step-' + label]"></div>
                </template>
            </vue-slider>
        </div>
        <div class="text-center mb-8">
            <h3 class="py-2 font-medium font-roboto text-lg">Level {{ value }}</h3>
            <p class="text-sm">A "Level {{ value }}" should be able to play the rudiments blah di blah maecenas sodales tellus quis aliquam vulputate. Nam vehicula ultricies augue, a consequat tortor maximus ut. Sed a gravida dui, sit amet ullamcorper magna.</p>
        </div>
        <div class="flex justify-center">
            <button-input
                label="next"
                theme="blue"
                @click="next()"
            ></button-input>
        </div>
    </div>
</template>

<script lang="ts">
import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';
import Button from '../Blocks/Button';

export default {
    components: {
        'button-input': Button,
        VueSlider
    },
    data(): object {
        return {
            value: 2,
        };
    },
    methods: {
        next() {}
    },
}
</script>
<style>
.custom-step {
    width: 2px;
    height: 100%;
    background-color: #0B76DB;
    cursor: pointer;
}
.custom-step.active {
}
.custom-step.step-1,
.custom-step.step-9 {
    width: 0;
    height: 0;
}
</style>
