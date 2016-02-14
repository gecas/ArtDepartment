var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
    	.scripts([
    		'script.js',
    		//'Dropzone/dropzone.js',
    		'sweetalert/sweetalert-dev.js'
    	], './public/js/script.js')

    	.styles([
            'sweetalert/sweetalert.css',
    	],'./public/css/styles.css');
});
