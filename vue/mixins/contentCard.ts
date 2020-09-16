import ContentModel from '../models/content';
import ContentCatalogueLinks from '../maps/contentCatalogueLinks';

export default {
    methods: {
        getUrl(content: ContentModel) {
            return ContentCatalogueLinks[content.contentType] || '/router.php/vue/content_video';
        },
    },
};
