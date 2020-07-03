export default class Utils {
    static copy(value) {
        return JSON.parse(JSON.stringify(value));
    }
}
