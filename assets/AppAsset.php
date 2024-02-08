<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',

        'css/site.css',
        'css/main.css',
        // 'css/slider_style.css',    //slider
        'css/app_dsai.css',
        // 'css/cloud.css',
        'css/aos.css',
        'css/glightbox.min.css',
        'css/glightbox.css',
        'css/plyr.css',
        'css/plyr.min.css',
        'css/swiper-bundle.min.css',
        'css/bootstrap.min.css',
        // 'css/bootstrap.min.css',
        'css/bootstrap-icons.css',
        'css/bootstrap-icons.min.css',
        // new added
        'css/development_page.css',
        
        'css/bootstrap.rtl.css',
        'css/bootstrap.rtl.min.css',
        'css/bootstrap-grid.css',
        'css/bootstrap-grid.min.css',
        'css/bootstrap-grid.rtl.css',
        'css/bootstrap-grid.rtl.min.css',
        'css/bootstrap.css',
       
        'css/bootstrap-reboot.css',
        'css/bootstrap-reboot.min.css',
        'css/bootstrap-reboot.rtl.css',
        'css/bootstrap-reboot.rtl.min.css',
        'css/bootstrap-utilities.css',
        'css/bootstrap-utilities.min.css',
        'css/bootstrap-utilities.rtl.css',
        'css/bootstrap-utilities.rtl.min.css',
        
        // -----for corousal----
        // 'css/main.css',
         'css/style.css',
        // 'css/bootstrap.min.css',
        // 'lib/animate/animate.css',
        // 'lib/animate/animate.min.css',
        // 'lib/owlcarousel/assets/owl.carousel.css',
        // 'lib/owlcarousel/assets/owl.carousel.min.css',
        // 'lib/owlcarousel/assets/owl.theme.default.css',
        // 'lib/owlcarousel/assets/owl.theme.default.min.css',
        // 'lib/owlcarousel/assets/owl.theme.green.css',
        // 'lib/owlcarousel/assets/owl.theme.green.min.css',
        // ------------corousal ended here-----------------

        // --------------------scss files--------------------

        // 'css/bootstrap.scss',
        // 'css/bootstrap-icons.scss',
        // 'css/_accordion.scss',
        // 'css/_alert.scss',
        // 'css/_badge.scss',
        // 'css/_breadcrumb.scss',
        // 'css/_button-group.scss',
        // 'css/_buttons.scss',
        // 'css/_card.scss',
        // 'css/_carousel.scss',
        // 'css/_close.scss',
        // 'css/_containers.scss',
        // 'css/_dropdown.scss',
        // 'css/_forms.scss',
        // 'css/_functions.scss',
        // 'css/_grid.scss',
        // 'css/_helpers.scss',
        
        // 'css/_images.scss',
        // 'css/_list-group.scss',
        // 'css/_mixins.scss',
        // 'css/_modal.scss',
        // 'css/_nav.scss',
        // 'css/_navbar.scss',
        // 'css/_offcanvas.scss',
        // 'css/_pagination.scss',
        // 'css/_popover.scss',
        // 'css/_progress.scss',
        // 'css/_reboot.scss',
        // 'css/_root.scss',
        // 'css/_spinners.scss',
        // 'css/_tables.scss',
        // 'css/_toasts.scss',
        // 'css/_tooltip.scss',
        // 'css/_transitions.scss',

        // 'css/_type.scss',
        // 'css/_utilities.scss',
        // 'css/_variables.scss',
        // 'css/bootstrap-grid.scss',
        // 'css/bootstrap-reboot.scss',
        // 'css/bootstrap-utilities.scss',
        // 'css/_offcanvas.scss',
        // 'css/_pagination.scss',
        // 'css/_popover.scss',
        // 'css/_progress.scss',
        // 'css/_reboot.scss',
        // 'css/_root.scss',
        // 'css/_spinners.scss',
        // 'css/_tables.scss',
        // 'css/_toasts.scss',
        // 'css/_tooltip.scss',
        // 'css/_helpers.scss',
// -----------------van-------------
        // 'css/_rfs.scss',
// -------------------uti-----------
        // 'css/_api.scss',
// -------------mix---------------
        // 'css/_alert.scss',
        // 'css/_box-shadow.scss',
        // 'css/_border-radius.scss',
        // 'css/_breakpoints.scss',
        // 'css/_buttons.scss',
        // 'css/_caret.scss',
        // 'css/_clearfix.scss',
        // 'css/_color-scheme.scss',
        // 'css/_container.scss',
        // 'css/_deprecate.scss',
        // 'css/_forms.scss',
        // 'css/_gradients.scss',
        // 'css/_grid.scss',
        // 'css/_image.scss',
        // 'css/_list-group.scss',
        // 'css/_lists.scss',
        // 'css/_pagination.scss',
        // 'css/_reset-text.scss',
        // 'css/_resize.scss',
        // 'css/_table-variants.scss',
        // 'css/_text-truncate.scss',
        // 'css/_transition.scss',
        // 'css/_utilities.scss',
        // 'css/_visually-hidden.scss',

        // ----------help--------
        // 'css/_clearfix.scss',
        // 'css/_colored-links.scss',
        // 'css/_position.scss',
        // 'css/_ratio.scss',
        // 'css/_stretched-link.scss',
        // 'css/_text-truncation.scss',
        // 'css/_visually-hidden.scss',
        // ------------form--------------
        // 'css/_floating-labels.scss',
        // 'css/_form-check.scss',
        // 'css/_form-control.scss',
        // 'css/_form-range.scss',
        // 'css/_form-select.scss',
        // 'css/_form-text.scss',
        // 'css/_input-group.scss',
        // 'css/_labels.scss',
        // 'css/_validation.scss',
    ];
    
    public $js = [



        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        'js/main.js',
        // ----------assets/vendor original----------------
        'js/bootstrap.bundle.js',
                // 'js/bootstrap.bundle.js.map',
        'js/bootstrap.bundle.min.js',
            // 'js/bootstrap.bundle.min.js.map',
            // 'js/bootstrap.esm.js',
            // 'js/bootstrap.esm.js.map',
            // 'js/bootstrap.esm.min.js',
            // 'js/bootstrap.esm.min.js.map',
            // 'js/bootstrap.js',
            // 'js/bootstrap.js.map',
            // 'js/bootstrap.min.js',
            // 'js/bootstrap.min.js.map',
        'js/isotope.pkgd.min.js',
        'js/isotope.pkgd.js',
        'js/main.js',
        // 'js/slider_js.js',              //slider

        'js/purecounter_vanilla.js',
        'js/swiper-bundle.min.js',
        'js/validate.js',
        'js/aos.js',
        // 'js/aos.cjs.js',
        // 'js/aos.esm.js',
        // 'js/aos.js.map',
        'js/glightbox.min.js',
        // 'js/glightbox.js',

// ----------assets/vendor original end ----------------

// ----------assets/vendor copied----------------
        'js/bootstrap.bundle.js',
        // 'js/bootstrap.bundle.js.map',
        'js/bootstrap.bundle.min.js',
        // 'js/bootstrap.bundle.min.js.map',
        // 'js/bootstrap.esm.js',
        // 'js/bootstrap.esm.js.map',
        // 'js/bootstrap.esm.min.js',
        // 'js/bootstrap.esm.min.js.map',
        // 'js/bootstrap.js',
        // 'js/bootstrap.js.map',
        // 'js/bootstrap.min.js',
        // 'js/bootstrap.min.js.map',
        'js/isotope.pkgd.min.js',
        'js/isotope.pkgd.js',
        'js/main.js',
        'js/purecounter_vanilla.js',
        'js/swiper-bundle.min.js',
        'js/validate.js',
        'js/aos.js',
        // 'js/aos.cjs.js',
        // 'js/aos.esm.js',
        // 'js/aos.js.map',
        'js/glightbox.min.js',
        // 'js//glightbox.js',
// ----------assets/vendor copied end----------------

        // -----for corousal----
        // 'lib/easing/easing.js',
        // 'lib/easing/easing.min.js',
        // 'lib/owlcarousel/owl.carousel.js',
        // 'lib/owlcarousel/owl.carousel.min.js',
        // 'lib/waypoints/waypoints.min.js',
        // 'lib/wow/wow.js',
        // 'lib/wow/wow.min.js',
        // ------------corousal ended here-----------------
        
    ];

   

    public $map = [
        // 'aos.js.map',
        // 'js/bootstrap.bundle.js.map',
        // 'bootstrap.bundle.min.js.map',
        // 'bootstrap.css.map',
        // 'bootstrap.esm.js.map',
        // 'bootstrap.esm.min.js.map',
        // 'bootstrap.js.map',
        // 'bootstrap.min.css.map',
        // 'bootstrap.min.js.map',
        // 'bootstrap.rtl.css.map',
        // 'bootstrap.rtl.min.css.map',
        // 'bootstrap-grid.css.map',
        // 'bootstrap-grid.min.css.map',
        // 'bootstrap-grid.rtl.css.map',
        // 'bootstrap-grid.rtl.min.css.map',
        // 'bootstrap-reboot.css.map',
        // 'bootstrap-reboot.min.css.map',
        // 'bootstrap-reboot.rtl.css.map',
        // 'bootstrap-reboot.rtl.min.css.map',
        // 'bootstrap-utilities.css.map',
        // 'bootstrap-utilities.min.css.map',
        // 'bootstrap-utilities.rtl.css.map',
        // 'bootstrap-utilities.rtl.min.css.map',
        // 'purecounter_vanilla.js.map',
        // 'swiper-bundle.min.js.map',

        // -----for corousal----
        
        // ------------corousal ended here-----------------
    ];

    public $scss = [
        

       
        // ------------corousal ended here-----------------
    ];

    public $fonts = [
        'fonts/bootstrap-icons.woff',
        'fonts/bootstrap-icons.woff2',
        'fonts/Poppins-Bold.ttf',
        'fonts/Poppins-Medium.ttf',
        'Poppins-Regular.ttf',

        // -----for corousal----
        
        // ------------corousal ended here-----------------
    ];

    // public $scss = [
    //     'scss/bootstrap-icons.scss',
    // ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
