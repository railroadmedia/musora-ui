import Instructor from './instructor';
import ContentModel from '../models/content';

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
        public style?: string,
        public likes?: number,
        public liked?: boolean,
        public sheet?: string,
        public topic?: string,
        public length?: number,
        public totalXp?: number,
        public status?: string,
        public parent?: Content,
        public progress = 0
    ) {
    }
}
