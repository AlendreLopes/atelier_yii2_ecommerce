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
        'css/styles.css',
    ];
    public $js = [
        'js/scripts',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
