let mix = require('laravel-mix');
let autoprefixer = require('autoprefixer');
let path = require('path');

// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

require('laravel-mix-purgecss');

mix.setPublicPath('./public');

mix.js(
    path.join(__dirname, 'vue/apps/generic/musora-content.js'),
    path.join(__dirname, 'public/js/generic/musora-content.js')
);
mix.js(
    path.join(__dirname, 'vue/apps/generic/musora-lesson.js'),
    path.join(__dirname, 'public/js/generic/musora-lesson.js')
);
mix.js(
    path.join(__dirname, 'vue/apps/generic/musora-profile.js'),
    path.join(__dirname, 'public/js/generic/musora-profile.js')
);
mix.extract(['vue']);

mix.babel(
    [
        path.join(__dirname, 'js/blocks.js'),
        path.join(__dirname, 'js/sections.js'),
    ],
    path.join(__dirname, 'public/js/generic/musora-utility-scripts.js')
);

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.js?$/,
                use: [{
                    loader: 'babel-loader',
                    options: Object.assign(mix.config.babel())
                }]
            },
            {
                test: /\.tsx?$/,
                loader: "ts-loader",
                options: { appendTsSuffixTo: [/\.vue$/] },
                exclude: /node_modules/
            }
        ]
    },
    resolve: {
        extensions: ["*", ".js", ".jsx", ".vue", ".ts", ".tsx", ".css"],
        modules: ['/app/musora-ui/node_modules'],
        symlinks: false
    },
    plugins: [
        // new BundleAnalyzerPlugin()
    ],
    devtool: mix.inProduction() ? 'none' : 'source-map'
});
mix.version();
