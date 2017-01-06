const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-sass-compass');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */
elixir(function(mix) {
    mix.sass([
        'atoms/**/*',
        'molecules/**/*',
        'organisms/**/*',
        'templates/**/*',
        'pages/**/*',
        'responsive/**/*',
    ], 'public/assets/css');
});



// elixir(function(mix) {
//
//     mix.compass('*', "public/css", {
//         style: "compressed",
//         sass: "resources/assets/sass/",
//         font: "public/fonts",
//         image: "public/img",
//         javascript: "public/js",
//         sourcemap: true
//     });
//
//
// });

