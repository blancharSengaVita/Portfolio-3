// const mix = require('laravel-mix');

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

//
// mix.ts('src/ts/Main.ts', 'js').sourceMaps()
//     .sass('src/scss/main.scss', 'css').sourceMaps()
//     .setPublicPath('dist').setResourceRoot('../')
//     .browserSync({
//         proxy: false,
//         server: {
//             baseDir: './'
//         }
//     });


// mix .setPublicPath('./wp-content/themes/portfolio/public')
//     .js('wp-content/themes/portfolio/resources/js/script.js').sourceMaps()
//     .sass('wp-content/themes/portfolio/resources/sass/style.scss').sourceMaps()
//     .options({
//         processCssUrls: false
//     })
//     .browserSync({
//         //proxy: 'portfolio.test',
//         proxy: false,
//         server: {
//             baseDir: './'
//         },
//         notify: false
//     })
//     .version();

const mix = require('laravel-mix');

mix.setPublicPath('dist').setResourceRoot('../')
    .sass(`resources/sass/style.scss`, `css`).sourceMaps()
    .js(`resources/js/script.js`, `js`).sourceMaps()
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'https://portfolio.test',
        notify: false
    })
    .version();

//mix.browserSync('https://mywebsite.test');
//setPublicPath('./portfolio/assests')