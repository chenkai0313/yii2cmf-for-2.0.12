<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;

$this->title = '站点信息';
$this->params['breadcrumbs'][] = ['label'=>'系统设置', 'url'=>'javascript:void()'];
$this->params['breadcrumbs'][] = ['label'=>'网站配置', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;

var_dump(Yii::$app->controller->id . '/' . Yii::$app->controller->action->id);
?>
