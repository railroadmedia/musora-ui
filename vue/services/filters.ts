import Filter from '../models/filter';

export default class Filters {
    static getFiltersFromArray(
        list: {
            name: string,
            id?: string,
            label?: string,
            tabIndex?: number,
            active?: boolean,
            icon?: string
        }[]
    ): Filter[] {
        let result = [];

        list.forEach((value, index: number) => {
            try {
                let id = value.id || 'checkbox-input-' + value.name;

                result.push(
                    new Filter(
                        id,
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
}
