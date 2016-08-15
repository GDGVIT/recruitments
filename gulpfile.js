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
    
    mix.styles([
        'materialize.min.css',
        'postlogin.css',
        'stlye.css',
         'sweetalert.css'] , 'public/css/main.css');

    mix.version('public/css/app.css');

    mix.scripts(['jquery.js','jquer-visible.min.js','materialize.min.js','script.js','smoothscroll.js','sweetalert.min.js','sweetalert2.min.js','visible.min.js'], 'public/js/main.js');
    
});
