const mix = require('laravel-mix');

mix.scripts('resources/js/app.js', 'public/js/app.js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
