<template>
    <div class="flex-1 rounded-lg overflow-hidden bg-edge-blue">
        <h4 class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg">
            <span class="font-roboto uppercase">{{ title }}</span>
            <div class="small:hidden flex items-center">
                <div class="flex items-center justify-center border rounded-full w-4 h-4 mr-2 text-xs text-medium-gray">?</div>
                <i class="icon-home text-lg font-bold small:hidden collapse-trigger-open"></i>
                <i class="icon-hammer text-lg font-bold small:hidden collapse-trigger-close"></i>
            </div>
        </h4>
        <div class="collapse-container small:expand">
            <div class="px-2 py-2 small:px-6">
                <div class="grid grid-cols-5 cursor-pointer">
                    <div class="py-4" @click.stop.prevent="select(1)">
                        <div
                            style="height: 12px;"
                            class="border-2 border-edge-blue bg-white relative rounded-l-full"
                            :class="{'bg-white': (currentLevel >= 1), 'bg-edge-dark-blue': (currentLevel < 1)}"
                        >
                            <input type="radio" class="hidden" id="level-one" name="level" value="1">
                            <div
                                style="height: 30px; width: 30px; top: -11px; right: -11px"
                                class="border-4 border-edge-blue bg-white rounded-full absolute z-10"
                                v-show="currentLevel == 1"
                            ></div>
                        </div>
                    </div>
                    <div class="py-4" @click.stop.prevent="select(2)">
                        <div
                            style="height: 12px;"
                            class="border-2 border-l-0 border-edge-blue bg-white relative"
                            :class="{'bg-white': (currentLevel >= 2), 'bg-edge-dark-blue': (currentLevel < 2)}"
                        >
                            <input type="radio" class="hidden" id="level-two" name="level" value="2">
                            <div
                                style="height: 30px; width: 30px; top: -11px; right: -11px"
                                class="border-4 border-edge-blue bg-white rounded-full absolute z-10"
                                v-show="currentLevel == 2"
                            ></div>
                        </div>
                    </div>
                    <div class="py-4" @click.stop.prevent="select(3)">
                        <div
                            style="height: 12px;"
                            class="border-2 border-l-0 border-edge-blue bg-white relative"
                            :class="{'bg-white': (currentLevel >= 3), 'bg-edge-dark-blue': (currentLevel < 3)}"
                        >
                            <input type="radio" class="hidden" id="level-three" name="level" value="3">
                            <div
                                style="height: 30px; width: 30px; top: -11px; right: -11px"
                                class="border-4 border-edge-blue bg-white rounded-full absolute z-10"
                                v-show="currentLevel == 3"
                            ></div>
                        </div>
                    </div>
                    <div class="py-4" @click.stop.prevent="select(4)">
                        <div
                            style="height: 12px;"
                            class="border-2 border-l-0 border-edge-blue bg-white relative"
                            :class="{'bg-white': (currentLevel >= 4), 'bg-edge-dark-blue': (currentLevel < 4)}"
                        >
                            <input type="radio" class="hidden" id="level-four" name="level" value="4">
                            <div
                                style="height: 30px; width: 30px; top: -11px; right: -11px"
                                class="border-4 border-edge-blue bg-white rounded-full absolute z-10"
                                v-show="currentLevel == 4"
                            ></div>
                        </div>
                    </div>
                    <div class="py-4" @click.stop.prevent="select(5)">
                        <div
                            style="height: 12px;"
                            class="border-2 border-l-0 border-edge-blue bg-white relative rounded-r-full"
                            :class="{'bg-white': (currentLevel >= 5), 'bg-edge-dark-blue': (currentLevel < 5)}"
                        >
                            <input type="radio" class="hidden" id="level-five" name="level" value="5">
                            <div
                                style="height: 30px; width: 30px; top: -11px; right: -11px"
                                class="border-4 border-edge-blue bg-white rounded-full absolute z-10"
                                v-show="currentLevel == 5"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col small:flex-row items-center text-2xl">
                    <div class="w-1/4 hidden small:block"></div>
                    <div class="w-2/4 text-center level-tab">
                        <span class="text-white font-extrabold uppercase">{{ $_levelLabel }}</span>
                    </div>
                    <div class="w-1/4 flex justify-center leading-none py-4 small:justify-end small:py-0">
                        <a href="#" class="rounded-full border-2 border-edge-dark-blue text-edge-dark-blue px-6 text-xs py-1 small:px-8 small:text-base uppercase">all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">

export default {
    props: {
        currentLevel: {
            type: Number,
        },
        title: {
            type: String,
        },
    },
    data(): object {
        return {
            levelLabels: {
                1: "level 1",
                2: "level 2",
                3: "level 3",
                4: "level 4",
                5: "level 5",
            }
        };
    },
    computed: {
        $_levelLabel() {
            return this.levelLabels[this.currentLevel];
        },
    },
    methods: {
        select(value): void {
            this.$emit('levelSelected', {level: value});
        }
    }
};
</script>
