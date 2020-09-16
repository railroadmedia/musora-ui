module.exports = (ctx) => ({
    plugins: [
        require('postcss-import'),
        require('postcss-simple-vars'),
        require('tailwindcss'),
        require('postcss-nested'),
        require('autoprefixer'),
        ctx.env === 'production' ? require('cssnano') : false
    ]
})