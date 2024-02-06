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
        'css/app_dsai.css',
        // 'css/cloud.css',
        'assets/vendor/aos/aos.css',
        'assets/vendor/glightbox/css/glightbox.min.css',
        'assets/vendor/glightbox/css/glightbox.css',
        'assets/vendor/glightbox/css/plyr.css',
        'assets/vendor/glightbox/css/plyr.min.css',
        'assets/vendor/swiper/swiper-bundle.min.css',
        // 'assets/vendor/bootstrap/css/bootstrap.min.css',
        'assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'assets/vendor/bootstrap-icons/bootstrap-icons.min.css',
        // new added
        'css/development_page.css',
        
        'assets/vendor/bootstrap/css/bootstrap.rtl.css',
        'assets/vendor/bootstrap/css/bootstrap.rtl.min.css',
        'assets/vendor/bootstrap/css/bootstrap-grid.css',
        'assets/vendor/bootstrap/css/bootstrap-grid.min.css',
        'assets/vendor/bootstrap/css/bootstrap-grid.rtl.css',
        'assets/vendor/bootstrap/css/bootstrap-grid.rtl.min.css',
        'assets/vendor/bootstrap/css/bootstrap.css',
        // 'assets/vendor/bootstrap/css/bootstrap-icons.min.css',
        'assets/vendor/bootstrap/css/bootstrap-reboot.css',
        'assets/vendor/bootstrap/css/bootstrap-reboot.min.css',
        'assets/vendor/bootstrap/css/bootstrap-reboot.rtl.css',
        'assets/vendor/bootstrap/css/bootstrap-reboot.rtl.min.css',
        'assets/vendor/bootstrap/css/bootstrap-utilities.css',
        'assets/vendor/bootstrap/css/bootstrap-utilities.min.css',
        'assets/vendor/bootstrap/css/bootstrap-utilities.rtl.css',
        'assets/vendor/bootstrap/css/bootstrap-utilities.rtl.min.css',
        
        // -----for corousal----
        'css/main.css',
        'css/style.css',
        'css/bootstrap.min.css',
        'lib/animate/animate.css',
        'lib/animate/animate.min.css',
        'lib/owlcarousel/assets/owl.carousel.css',
        'lib/owlcarousel/assets/owl.carousel.min.css',
        'lib/owlcarousel/assets/owl.theme.default.css',
        'lib/owlcarousel/assets/owl.theme.default.min.css',
        'lib/owlcarousel/assets/owl.theme.green.css',
        'lib/owlcarousel/assets/owl.theme.green.min.css',
        // ------------corousal ended here-----------------

    ];
    public $js = [



        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        'js/main.js',
        // ----------assets/vendor original----------------
        'assets/vendor/bootstrap/js/bootstrap.bundle.js',
        // 'assets/vendor/bootstrap/js/bootstrap.bundle.js.map',
        'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        // 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js.map',
        // 'assets/vendor/bootstrap/js/bootstrap.esm.js',
        // 'assets/vendor/bootstrap/js/bootstrap.esm.js.map',
        // 'assets/vendor/bootstrap/js/bootstrap.esm.min.js',
        // 'assets/vendor/bootstrap/js/bootstrap.esm.min.js.map',
        // 'assets/vendor/bootstrap/js/bootstrap.js',
        // 'assets/vendor/bootstrap/js/bootstrap.js.map',
        // 'assets/vendor/bootstrap/js/bootstrap.min.js',
        // 'assets/vendor/bootstrap/js/bootstrap.min.js.map',
        'assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'assets/vendor/isotope-layout/isotope.pkgd.js',
        'assets/js/main.js',
        'assets/vendor/purecounter/purecounter_vanilla.js',
        'assets/vendor/swiper/swiper-bundle.min.js',
        'assets/vendor/php-email-form/validate.js',
        'assets/vendor/aos/aos.js',
        // 'assets/vendor/aos/aos.cjs.js',
        // 'assets/vendor/aos/aos.esm.js',
        // 'assets/vendor/aos/aos.js.map',
        'assets/vendor/glightbox/js/glightbox.min.js',
        // 'assets/vendor/glightbox/js/glightbox.js',

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
        'isotope-layout/isotope.pkgd.min.js',
        'isotope-layout/isotope.pkgd.js',
        'assets/js/main.js',
        'purecounter/purecounter_vanilla.js',
        'swiper/swiper-bundle.min.js',
        'php-email-form/validate.js',
        'aos/aos.js',
        // 'aos/aos.cjs.js',
        // 'aos/aos.esm.js',
        // 'aos/aos.js.map',
        'glightbox/js/glightbox.min.js',
        // 'glightbox/js/glightbox.js',
// ----------assets/vendor copied end----------------

        // -----for corousal----
        'lib/easing/easing.js',
        'lib/easing/easing.min.js',
        'lib/owlcarousel/owl.carousel.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'lib/waypoints/waypoints.min.js',
        'lib/wow/wow.js',
        'lib/wow/wow.min.js',
        // ------------corousal ended here-----------------
        
    ];

    public $json = [
        'assets/vendor/bootstrap-icons/bootstrap-icons.min.css',
        // -----for corousal----

        // ------------corousal ended here-----------------
    ];

    public $map = [
        // 'aos.js.map',
        'assets/vendor/bootstrap/js/bootstrap.bundle.js.map',
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
        'assets/vendor/bootstrap-icons/bootstrap-icons.scss',

       
        // ------------corousal ended here-----------------
    ];

    public $font = [
        'fonts/bootstrap-icons.woff',
        'fonts/bootstrap-icons.woff2',

        // -----for corousal----
        
        // ------------corousal ended here-----------------
    ];

    // public $scss = [
    //     'assets/vendor/bootstrap-icons/bootstrap-icons.scss',
    // ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
