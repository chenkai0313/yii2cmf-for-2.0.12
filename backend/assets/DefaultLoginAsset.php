<?php
namespace backend\assets;

use yii\web\AssetBundle;

class DefaultLoginAsset extends AssetBundle
{
    public $sourcePath = '@backend/web/default';

    public $css = [
        'login/login.css',
    ];
    public $js = [
        'login/cloud.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
