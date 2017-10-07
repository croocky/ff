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

mix.js(['node_modules/jquery/dist/jquery.min.js',
  'resources/assets/js/my.js'
  ], 'public/js/all.js')
    .styles(['node_modules/skeleton-css/css/normalize.css',
    'node_modules/skeleton-css/css/skeleton.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/app.css',
    'resources/assets/css/demo.css',
    'resources/assets/css/stars.css',
    'resources/assets/css/style4.css'
  ],
  'public/css/all.css');
