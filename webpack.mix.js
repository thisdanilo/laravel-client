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
    "node_modules/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css",
    "node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.css",
    "node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.css",
    "node_modules/admin-lte/dist/css/adminlte.min.css",
    "resources/css/style.css",
], "public/css/admin.css");

 /* Admin JS */
 mix.combine([
    "node_modules/admin-lte/plugins/jquery/jquery.min.js",
    "node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js",
    "node_modules/admin-lte/plugins/datatables/jquery.dataTables.js",
    "node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js",
    "node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.js",
    "node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.js",
    "node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.js",
    "node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.js",
    "node_modules/admin-lte/dist/js/adminlte.min.js",
    "node_modules/jquery-mask-plugin/dist/jquery.mask.min.js",
], "public/js/admin.js");

// Client JS
mix.scripts(
    "resources/js/client.js",
    "public/js/client.js"
);
