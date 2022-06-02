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

 mix.js('public/js/date_selectbox.js', 'public/js')
 mix.js('public/js/delete_confirm_modal.js', 'public/js')
 mix.js('resources/js/app.js', 'public/js')
 mix.scripts([
     'public/js/date_selectbox.js',
     'public/js/delete_confirm_modal.js'
 ], 'public/js/all.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
