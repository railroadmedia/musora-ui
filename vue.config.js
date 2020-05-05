module.exports = {
    outputDir: 'public/vue/build',
    // chainWebpack: config => {
    // },
    css: {
        extract: true,
        requireModuleExtension: false,
        loaderOptions: {
            css: {
                modules: false,
            }
        }
    }
}
