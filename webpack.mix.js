let mix = require('laravel-mix');
let autoprefixer = require('autoprefixer');
let path = require('path');

require('laravel-mix-purgecss');

mix.setPublicPath('./public');

mix.js(
    path.join(__dirname, 'vue/apps/generic/app.js'),
    path.join(__dirname, 'public/js/generic/app.js')
);

mix.babel(
    path.join(__dirname, 'js/test.js'),
    path.join(__dirname, 'public/js/test.js')
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
    devtool: mix.inProduction() ? 'none' : 'source-map'
});
mix.version();
