import Instructor from './instructor';

export default class Content {
    constructor(
        public id: number,
        public url: string,
        public thumbnail: string,
        public title: string,
        public instructors: Instructor[],
        public contentType: string,
        public difficulty: string,
        public contentIcon?: string,
        public date?: string,
        public artist?: string,
        public genre?: string,
        public likes?: number,
        public liked?: boolean,
        public progress = 0
    ) {
    }
}
