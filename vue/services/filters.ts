import Filter from '../models/filter';
import FilterGroup from '../models/filterGroup';

export default class Filters {
    static getFiltersFromArray(
        list: {
            name: string,
            id?: string,
            label?: string,
            tabIndex?: number,
            active?: boolean,
            icon?: string
        }[],
        groupId: string
    ): Filter[] {
        let result = [];

        list.forEach((value) => {
            try {
                let id = value.id || 'checkbox-input-' + value.name;

                result.push(
                    new Filter(
                        id,
                        groupId,
                        value.name,
                        value.label || value.name,
                        value.tabIndex || 1,
                        value.active || false,
                        value.icon
                    )
                );
            } catch (e) {
                // todo - add exception handling
            }
        });

        return result;
    }

    static getFilterGroupsFromArray(list): FilterGroup[] {
        let result = [];

        list.forEach((group) => {
            let id = group.title.replace(' ', '-')
            let filters = this.getFiltersFromArray(group.items, id);

            result.push(
                new FilterGroup(
                    id,
                    group.title,
                    filters,
                    group.collapsed || false
                )
            );
        });

        return result;
    }
}
