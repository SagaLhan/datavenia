<?php

namespace app\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Asset for the splash / landing front page stylesheets and javascript files.
 * Class FrontPageTemplateAsset
 * @package app\assets
 */
class FrontPageTemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/creative.min.css',
        'css/magnific-popup.css',
        'css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic',
    ];
    public $js = [
        'js/creative.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/scrollreveal.min.js',
        'js/jquery.easing.min.js',
        'js/jquery.fittext.js',
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
}
