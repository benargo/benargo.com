const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .less('resources/assets/less/glyphicons/glyphicons.less', '../resources/assets/css')
   .less('resources/assets/less/glyphicons/glyphicons-filetypes.less', '../resources/assets/css')
   .less('resources/assets/less/glyphicons/glyphicons-halflings.less', '../resources/assets/css')
   .less('resources/assets/less/glyphicons/glyphicons-social.less', '../resources/assets/css')
   .sass('resources/assets/sass/app.scss', '../resources/assets/css')
   .sass('resources/assets/sass/cv.scss', 'public/css')
   .styles([
		'resources/assets/css/glyphicons.css',
        'resources/assets/css/glyphicons-filetypes.css',
        'resources/assets/css/glyphicons-halflings.css',
        'resources/assets/css/glyphicons-social.css',
        'resources/assets/css/app.css',
	], 'public/css/app.css')
