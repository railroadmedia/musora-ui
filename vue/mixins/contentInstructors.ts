import ContentModel from '../models/content';
import InstructorModel from '../models/instructor';

export default {
    methods: {
        getInstructors(content: ContentModel): string {
            let instructors = [];
            if (content.instructors) {
                content.instructors.forEach((instructor: InstructorModel) => {
                    instructors.push(instructor.name);
                });
            }

            return instructors.length ? instructors.join(', ') : '';
        }
    },
};
