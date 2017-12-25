<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;

$this->title = '配置项列表';
$this->params['breadcrumbs'][] = ['label'=>'系统设置', 'url'=>'javascript:void()'];
$this->params['breadcrumbs'][] = ['label'=>'配置项管理', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;

var_dump(Yii::$app->controller->id . '/' . Yii::$app->controller->action->id);
?>
