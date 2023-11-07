const mix = require('laravel-mix');

mix.js('source/js/layout.js', 'assets/js/')
    .sass('source/scss/layout.scss', 'assets/css')
    .sass('source/scss/pages/home.scss', 'assets/css/pages')
    .sass('source/scss/pages/product-detail.scss', 'assets/css/pages')
    .sass('source/scss/pages/product-list.scss', 'assets/css/pages')
    .sass('source/scss/pages/member-registration.scss', 'assets/css/pages')
    .sass('source/scss/pages/login.scss', 'assets/css/pages')
    .sass('source/scss/pages/agreement.scss', 'assets/css/pages')
    .sass('source/scss/pages/inquiry.scss', 'assets/css/pages')
mix.options({
    processCssUrls: false, //Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
});