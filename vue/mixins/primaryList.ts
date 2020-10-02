import ContentModel from '../models/content';
import ContentService from '../services/content';

export default {
    methods: {
        toggleAddToPrimary(content: ContentModel) {
            ContentService
                .toggleAddToPrimary(content)
                .then(response => {
                    this.handleToggleAddToPrimary(response, content);
                });
        },

        handleToggleAddToPrimary(response, content: ContentModel) {
            content.isAddedToPrimaryPlaylist = !content.isAddedToPrimaryPlaylist;
        },
    }
}
