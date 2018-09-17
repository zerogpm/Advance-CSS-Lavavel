let mix = require('laravel-mix');

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

mix.js([
    'resources/assets/js/main.js'
], 'public/js')
   .sass('resources/assets/sass/foo.scss', 'public/css')
   .sass('resources/assets/sass/ass.scss', 'public/css')
   .sass('resources/assets/sass/share.scss', 'public/css')
   .sass('resources/assets/sass/packages.scss', 'public/css')
   .sass('resources/assets/sass/customer.scss', 'public/css')
   .sass('resources/assets/sass/hosting.scss', 'public/css')
   .sass('resources/assets/sass/sass.scss', 'public/css')
    .browserSync('http://laravel-test/');
