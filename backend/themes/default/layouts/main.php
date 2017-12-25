<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DefaultAsset;
use yii\helpers\Html;

DefaultAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title . ' - ' . Yii::$app->name ?></title>
    <?php $this->head() ?>
    <?= $this->registerLinkTag(['rel'=>'shortcut icon', 'href'=>$this->params['defaultPath'] . '/favicon.ico']); ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="default-breadcrumb"><span>位置：</span><?= \yii\widgets\Breadcrumbs::widget([
        'itemTemplate' => "<li>{link}</li>",
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'homeLink' => false,
    ]) ?></div>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
