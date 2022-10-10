let mix = require("laravel-mix");

require("laravel-mix-copy-watched");

mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "css")
    .copyWatched("resources/img", "public/img");
