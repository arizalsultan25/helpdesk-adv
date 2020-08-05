<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
       '/Appland/assets/vendor/bootstrap/css/bootstrap.min.css',
       '/Appland/assets/vendor/icofont/icofont.min.css',
        '/Appland/assets/vendor/boxicons/css/boxicons.min.css',
        '/Appland/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        '/Appland/assets/vendor/venobox/venobox.css',
        '/Appland/assets/vendor/aos/aos.css',
        '/Appland/assets/css/style.css',

        //google font
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
  
    ];
    public $js = [
        '/Appland/assets/vendor/jquery/jquery.min.js',
        '/Appland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        '/Appland/assets/vendor/bootstrap/js/bootstrap.min.js',
       '/Appland/assets/vendor/jquery.easing/jquery.easing.min.js',
        '/Appland/assets/vendor/php-email-form/validate.js',
        '/Appland/assets/vendor/owl.carousel/owl.carousel.min.js',
        '/Appland/assets/vendor/venobox/venobox.min.js',
        '/Appland/assets/vendor/aos/aos.js',
        '/Appland/assets/js/main.js' 
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
