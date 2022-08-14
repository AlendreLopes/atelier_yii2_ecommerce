<?php

namespace frontend_atelier\assets;

use yii\web\AssetBundle;

/**
 * Main frontend_atelier application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // Core theme CSS (includes Bootstrap)
        'css/bootstrap.css',
        'css/styles.css',
        // Google fonts
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
        'https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap',
    ];
    public $js = [
        // Font Awesome icons (free version)
        'https://use.fontawesome.com/releases/v6.1.0/js/all.js',
        // Bootstrap core JS
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
        //  ScriptsCore theme JS
        'js/scripts',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
