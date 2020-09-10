<template>
	<div class="container w-full h-full mx-auto px-3 pt-4 pb-20">
		<div class="flex flex-col medium:flex-row py-4">
            <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col">
                <div
                    class="collapse-trigger small:hidden text-center text-blue-500 uppercase font-semibold text-xs cursor-pointer"
                    :class="{active: !collapsed}"
                    @click.stop.prevent="toggleCollapse()"
                >
                    <span v-show="collapsed">show filters</span>
                    <span v-show="!collapsed">hide filters</span>
                </div>
                <div class="collapse-container small:expand overflow-hidden">
                    <div class="flex flex-col flex-no-wrap">
                        <filter-group
                            v-for="group in $_sideFilters"
                            :key="group.id"
                            :filter-group="group"
                            @collapseToggle="handleCollapseToggle"
                        ></filter-group>
                    </div>
                </div>
            </div>
            <div class="w-full medium:ml-8">
                <div class="my-4 medium:my-0">
                    <div
                        class="flex content-center text-medium-gray text-sm"
                        :class="$_resultsClasses"
                    >
                        <div class="flex-1">
                            <span class="font-bold">{{ pagination.total }}</span> <span class="capitalize">{{ resultsType }}</span>
                        </div>
                        <div class="flex-none flex">
                            <div v-if="showPageSize && pagination.limit">
                                <span class="font-bold">Per Page: </span>
                                <select class="bg-white" v-model="$_limit">
                                    <option
                                        v-for="option in limitOptions"
                                        :key="option"
                                        :value="option"
                                    >{{ option }}</option>
                                </select>
                            </div>
                            <div class="ml-8">
                                <span class="font-bold">Sort by: </span>
                                <select class="bg-white" v-model="$_sort">
                                    <option
                                        v-for="(text, value, index) in sortOptions"
                                        :key="index"
                                        :value="value"
                                    >{{ text }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden small:flex text-xs flex-wrap items-center text-dark-gray py-2">
                    <div class="py-2 mr-1" v-show="$_hasActiveFiler">
                        <a
                            href="#"
                            class="text-edge-blue uppercase font-bold font-roboto-cond"
                            @click.stop.prevent="clearFilters()"
                        >clear all</a>
                    </div>
                    <filter-badge
                        v-for="filter in $_filters"
                        :key="filter.id"
                        :filter="filter"
                        @filterBadgeClicked="handleFilterBadgeClicked"
                    ></filter-badge>
                </div>

                <div class="py-2">
                    <show-content-card
                        v-for="item in content"
                        :key="item.id"
                        :content="item"
                        show-add-icon
                    ></show-content-card>
                </div>
            </div>
        </div>
	</div>
</template>

<script lang="ts">
import ContentService from '../../services/content';
import FiltersService from '../../services/filters';

import Filter from '../../models/filter';
import FilterGroup from '../../models/filterGroup';
import FilterGroupComponent from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import ShowContentCard from '../ContentCards/Show';

import ContentMixin from '../../mixins/content';

export default {
    components: {
    	'filter-group': FilterGroupComponent,
        'filter-badge': FilterBadge,
        'show-content-card': ShowContentCard,
    },
    mixins: [ContentMixin],
    props: {
    	showPageSize: {
            type: Boolean,
            default: () => false,
        },
        useProgressFilters: {
            type: Boolean,
            default: () => false,
        },
    },
    data(): object {
        return {
            collapsed: true,
            pageContentTypeFilterGroup: null,
        };
    },
    computed: {
    	$_resultsClasses(): string[] {
            let classes = [];

            if (this.showPageSize) {
                classes = ['flex-col', 'sm:flex-row'];
            } else {
                classes = ['flex-row'];
            }

            return classes;
        },
    },
    mounted(): void {

    	this.$root.$on('filterClicked', this.handleFilterClick);

    	let preloadData = JSON.parse(this.preloadData);

        this.setupFilters(preloadData);
        this.setupContent(preloadData);
        this.setupPagination(preloadData);

        // todo: setup shows content filter, should be hidden, used for fetching content
    },
    methods: {
    	toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        },

        setupFilters(response) {
            this.filters = FiltersService.getFilterGroupsFromResponse(response, this.topicsFiltersKey);

            if (this.useProgressFilters) {
                let progressFilterGroup = FiltersService.getProgressFilterGroup(this.filters);

                this.filters.push(progressFilterGroup);
            }
        },

        fetchData(resetPage, appendContent) {

            this.loading = true;

            if (resetPage) {
                this.pagination.page = 1;
            } else if (appendContent) {
                this.pagination.page = parseInt(this.pagination.page) + 1;
            }

            let payload = this.getPayload();

            payload = FiltersService.decorateRequestParams(payload, this.filters);

            ContentService
                .getContent(payload)
                .then((response) => {

                    this.setupFilters(response.data);
                    this.setupContent(response.data, appendContent);
                    this.setupPagination(response.data);

                    setTimeout(() => {
                        this.loading = false;
                    }, 500);
                });
        },
    },
};
</script>
