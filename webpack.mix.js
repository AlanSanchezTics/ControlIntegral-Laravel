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
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'resources/js/auth/bootstrap.js',
    'resources/js/auth/vue.js',
    'resources/js/auth/app.js'
],'public/js/auth/app.js')
.styles([
    'resources/css/maticon.css',
    'resources/css/bootstrap.css',
    'resources/css/spinner.css',
    'resources/css/custom.css'
],'public/css/auth/app.css');
