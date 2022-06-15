const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .js('resources/js/droplist.js', 'public/js')
    .js('resources/js/jquery.counterup.min.js', 'public/js')
    .js('resources/js/jquery.spincrement.min.js', 'public/js');
