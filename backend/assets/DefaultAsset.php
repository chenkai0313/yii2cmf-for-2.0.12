<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DefaultAsset extends AssetBundle
{
    public $sourcePath = '@backend/web/default';

    public $css = [
        'zui/css/zui.min.css',
        'css/site.css',
    ];
    public $js = [
        'zui/js/zui.min.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
