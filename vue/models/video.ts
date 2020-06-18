export default class Video {
    constructor(
        public id: string,
        public url: string,
        public thumbnail: string,
        public title: string,
        public teacher: string,
        public contentType: string,
        public difficulty: string,
        public contentIcon?: string,
        public progress = 0
    ) {
    }
}
