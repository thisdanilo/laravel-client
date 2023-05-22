const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 /* Admin CSS */
 mix.combine([
    "node_modules/admin-lte/plugins/fontawesome-free/css/all.css",
    "node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
    "node_modules/admin-lte/dist/css/adminlte.min.css",
], "public/css/admin.css");

 /* Admin JS */
 mix.combine([
    "node_modules/admin-lte/plugins/jquery/jquery.min.js",
    "node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js",
    "node_modules/admin-lte/dist/js/adminlte.min.js",
], "public/js/admin.js");
