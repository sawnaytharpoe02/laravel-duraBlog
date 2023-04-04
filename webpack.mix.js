const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('postcss-import'),
            require('postcss-nested'),
            require('postcss-preset-env')({
                stage: 0
            }),
            require('tailwindcss'),
            require('autoprefixer'),
        ],
        sassOptions: {
            includePaths: [
                './node_modules'
            ]
        }
    })
    .copy('node_modules/boxicons/fonts', 'public/fonts')
    .version();


