var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var jqueryPath = 'node_modules/jquery/dist';
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    var mdbootstrapPath = 'node_modules/mdbootstrap';
    var fontAwesomePath = 'node_modules/font-awesome'
    mix.sass('app.scss')
        .copy(jqueryPath + '/jquery.min.js', 'public/js')
        .copy(mdbootstrapPath + '/fonts', 'public/fonts')
        .copy(mdbootstrapPath + '/js/bootstrap.min.js', 'public/js')
        .copy(mdbootstrapPath + '/js/mdb.min.js', 'public/js')
        .copy(mdbootstrapPath + '/css/bootstrap.min.css', 'public/css')
        .copy(mdbootstrapPath + '/css/mdb.min.css', 'public/css')
        .copy(fontAwesomePath + '/fonts', 'public/fonts')
    mix.browserify('app.js');
    mix.browserify('app.js');
});