let mix = require('laravel-mix');
let autoprefixer = require('autoprefixer');
let path = require('path');

require('laravel-mix-purgecss');

mix.setPublicPath('./public');

mix.js(
    path.join(__dirname, 'vue/apps/example/example.js'),
    path.join(__dirname, 'public/js/example/example.js')
);

mix.webpackConfig({
    module: {
        rules: [{
            test: /\.js?$/,
            use: [{
                loader: 'babel-loader',
                options: Object.assign(mix.config.babel())
            }]
        }]
    },
    resolve: {
        modules: ['/app/musora-ui/node_modules'],
        symlinks: false
    },
    devtool: mix.inProduction() ? 'none' : 'source-map'
});
mix.version();