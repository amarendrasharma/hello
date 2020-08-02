const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/bootstrap.scss', 'public/css/bootstrap.css')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });

mix.copy('node_modules/alpinejs/dist/alpine.js', 'public/js/alpine.js');

// mix.browserSync({
//     proxy: 'http://amarendrasharma.github.io.test'
// });