let mix = require('laravel-mix');

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


mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/js-cookie/src/js.cookie.js',
    'node_modules/jquery-slimscroll/jquery.slimscroll.js',
    'node_modules/block-ui/jquery.blockUI.js',
    'node_modules/jquery-ui-sortable/jquery-ui.min.js',
    // END CORE PLUGINS
    // END EXTEND PLUGINS
    'resources/assets/js/modernizr.js',
    'resources/assets/packages/aimeos/shop/themes/jquery-ui.custom.min.js',
    'resources/assets/packages/aimeos/shop/themes/aimeos.js',
    'resources/assets/packages/aimeos/shop/themes/elegance/aimeos.js',
    'resources/assets/packages/aimeos/shop/themes/aimeos-detail.js',
    // END AIMEOS PLUGINS
    'resources/assets/js/custom.js',
], 'public/js/app.js');

mix.combine([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/font-awesome/css/font-awesome.min.css',
    // END CORE PLUGINS  
    // END EXTEND PLUGINS   
    'resources/assets/packages/aimeos/shop/themes/elegance/common.css',
    'resources/assets/packages/aimeos/shop/themes/elegance/aimeos.css',
    // END AIMEOS PLUGINS
    'resources/assets/css/custom.css',
], 'public/css/app.css');


mix.copy([
    'node_modules/bootstrap/dist/fonts/',
    'node_modules/font-awesome/fonts/',
    // END CORE FONTS
], 'public/fonts', false);

mix.copy([
    'resources/assets/packages/aimeos/shop/themes/elegance/media/',
    // END AIMEOS IMAGES
], 'public/css/media', false);

mix.copy([
    'resources/assets/images',
], 'public/images', false);


mix.copy([
    'resources/assets/favicons',
], 'public/favicons', false);
