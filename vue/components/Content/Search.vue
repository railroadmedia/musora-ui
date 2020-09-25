<template>
    <div class="pb-6">
        <div id="search-input-container" class="bg-header w-full border-b border-header-gray">
            <div class="mx-auto w-full container leading-none sm:h-16 flex flex-col sm:flex-row items-center justify-between px-3 py-4">
                <input type="text" name="search-term" v-model="$_searchTerm" class="text-center mb-4 sm:mb-0 sm:text-left text-white bg-header w-full sm:w-64 text-xl" placeholder="Enter search term">
                <div class="">
                    <button-input
                        label="search"
                        theme="blue"
                        fixed-width
                    ></button-input>
                </div>
            </div>
        </div>

        <div class="container w-full h-full mx-auto pl-3 pt-2">
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
                <div class="w-full medium:ml-5">
                    <div class="my-4 medium:my-0 px-3">
                        <div class="flex flex-row content-center text-medium-gray text-sm">
                            <div class="flex-1">
                                <span class="font-bold">{{ pagination.total }}</span> <span class="capitalize">{{ resultsType }}</span>
                            </div>
                            <div class="flex-none flex">
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

                    <div class="hidden small:flex text-xs flex-wrap items-center text-dark-gray py-2 px-3">
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
                        <my-list-content-card
                            v-for="item in content"
                            :key="item.id"
                            :content="item"
                            :show-remove-icon="false"
                            show-add-icon
                        ></my-list-content-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';
import ContentMixin from '../../mixins/content';
import ContentService from '../../services/content';
import FiltersService from '../../services/filters';
import FilterGroupComponent from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import MyListContentCard from '../ContentCards/MyList';

export default {
    components: {
        'button-input': Button,
        'filter-group': FilterGroupComponent,
        'filter-badge': FilterBadge,
        'my-list-content-card': MyListContentCard,
    },
    mixins: [ContentMixin],
    props: {
        useProgressFilters: {
            type: Boolean,
            default: () => false,
        },
    },
    data(): object {
        return {
            searchTerm: 'drum fills',
            collapsed: true,
        };
    },
    mounted(): void {
        let preloadData = JSON.parse(this.preloadData);

        this.setupFilters(preloadData);
        this.setupContent(preloadData);
        this.setupPagination(preloadData);

        this.$root.$on('filterClicked', this.handleFilterClick);
    },
    computed: {
        $_searchTerm: {
            get() {
                return this.searchTerm;
            },
            set(value) {
                this.searchTerm = value;
                this.fetchData();
            }
        },
    },
    methods: {
        setupFilters(response) {
            this.filters = FiltersService.getFilterGroupsFromResponse(response, '');

            if (this.useProgressFilters) {
                let progressFilterGroup = FiltersService.getProgressFilterGroup(this.filters);

                this.filters.push(progressFilterGroup);
            }
        },

        fetchData() {

            this.loading = true;

            this.pagination.page = 1;

            let payload = this.getPayload();

            payload = FiltersService.decorateRequestParams(payload, this.filters);

            ContentService
                .getMyList(payload) // todo - update
                .then((response) => {

                    this.setupFilters(response.data);
                    this.setupContent(response.data);
                    this.setupPagination(response.data);

                    setTimeout(() => {
                        this.loading = false;
                    }, 500);
                });
        },
    }
}
</script>

<style type="text/css">
#search-input-container {
    padding-top: 50px;
}

@media (min-width: 40rem) {
    #search-input-container {
        padding-top: 65px;
    }
}
</style>
