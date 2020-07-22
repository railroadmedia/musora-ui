export default {
    computed: {
        $_borderColorClass(): string[] {

            let classes = {
                team: ['border-black'],
                edge: ['border-edge-blue'],
                lifetime: ['border-yellow-500'],
                member: ['border-edge-blue'],
            };

            let author = this.getAuthor();

            return author && author.membership && classes[author.membership] ?
                classes[author.membership] :
                classes.member;
        },

        $_avatarIconBgClass(): string {

            let classes = {
                team: ['bg-black'],
                edge: ['bg-edge-blue'],
                lifetime: ['bg-yellow-500'],
                member: ['bg-edge-blue'],
            };

            let author = this.getAuthor();

            return author && author.membership && classes[author.membership] ?
                classes[author.membership] :
                classes.member;
        },

        $_avatarIconClass(): string {

            let classes = {
                team: 'icon-home',
                edge: 'icon-drumeo-edge',
                lifetime: 'icon-faculty-teacher'
            };

            let author = this.getAuthor();

            return classes[author.membership];
        },
    },
}
