<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;

$this->title = '用户列表';
$this->params['breadcrumbs'][] = ['label'=>'用户权限', 'url'=>'javascript:void()'];
$this->params['breadcrumbs'][] = ['label'=>'普通用户', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;

var_dump(Yii::$app->controller->id . '/' . Yii::$app->controller->action->id);
?>
