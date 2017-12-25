<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;

$this->title = '栏目分类列表';
$this->params['breadcrumbs'][] = ['label'=>'分类标签', 'url'=>'javascript:void()'];
$this->params['breadcrumbs'][] = ['label'=>'栏目分类', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;

var_dump(Yii::$app->controller->id . '/' . Yii::$app->controller->action->id);
?>
