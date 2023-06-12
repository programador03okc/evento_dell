const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory([
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'resources/fonts'
    ], 'public/fonts')
    .options({
        postCss: [
            require('postcss-css-variables')()
        ],
        processCssUrls: false
    });

mix.disableSuccessNotifications();
mix.browserSync({
    proxy: 'http://localhost:8000/',
    open: false
});
