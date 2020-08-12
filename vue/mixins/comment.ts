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

        $_avatarMembershipIcon(): string {

            let membership = {
                team: true,
                edge: true,
                lifetime: true,
            };

            let author = this.getAuthor();

            return author && author.membership && membership[author.membership];
        },

        $_avatarIconBgClass(): string[] {

            let classes = {
                team: ['bg-black', 'logo-team'],
                edge: ['bg-edge-blue', 'logo-edge'],
                lifetime: ['bg-yellow-500'],
                member: ['bg-edge-blue'],
            };

            let author = this.getAuthor();

            return author && author.membership && classes[author.membership] ?
                classes[author.membership] :
                classes.member;
        },

        $_avatarIconClass(): string {

            let author = this.getAuthor();

            return author && author.membership == 'lifetime' ? 'fal fa-infinity' : '';
        },
    },
}
