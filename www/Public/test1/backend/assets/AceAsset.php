<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AceAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ass/css/bootstrap.min.css',
        'ass/css/font-awesome.min.css',
        'ass/css/ace.min.css',
        'ass/css/style.css',
    ];
    public $js = [
        'ass/js/jquery-1.7.2.min.js',
        'ass/js/ace-extra.min.js',
        'ass/js/bootstrap.min.js',
        'ass/js/ace.min.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
