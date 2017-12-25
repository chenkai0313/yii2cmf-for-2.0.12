<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DefaultAsset;
use yii\helpers\Html;

DefaultAsset::register($this);
$this->registerJs('$("#yii-debug-toolbar").remove()');  // 删除外框架页的 debug
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title>default - <?= Yii::$app->name ?></title>
    <?php $this->head() ?>
    <?= $this->registerLinkTag(['rel'=>'shortcut icon', 'href'=>$this->params['defaultPath'] . '/favicon.ico']); ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="easyui-panel easyui-layout-north">
    <div class="easyui-panel-body clearfix">
        <div class="header-logo pull-left"><?= Html::a(Html::img($this->params['defaultPath'] . '/images/logo.png', ['alt'=>'LOGO', 'title'=>'LOGO']), 'javascript:void(0)') ?></div>
        <ul class="header-menu pull-left">
            <li><?= Html::a('内容管理', ['site/index'], ['class'=>'link-btn link-btn-blue']) ?></li>
            <li><?= Html::a('分类标签', ['site/index', 'aside'=>'cate'], ['class'=>'link-btn link-btn-green']) ?></li>
            <li><?= Html::a('用户权限', ['site/index', 'aside'=>'user'], ['class'=>'link-btn link-btn-yellow']) ?></li>
            <li><?= Html::a('系统设置', ['site/index', 'aside'=>'option'], ['class'=>'link-btn link-btn-purple']) ?></li>
        </ul>
        <ul class="header-link pull-right">
            <li class="header-frontend"><?= Html::a('前台首页', Yii::$app->request->hostInfo, ['target'=>'_blank']) ?></li>
            <li class="header-logout"><?= Html::beginForm(['site/logout'], 'post') . Html::submitButton('<b>退出</b>', ['title'=>'退出']) . Html::endForm() ?></li>
            <li class="header-user">
                <?= Html::a(Html::img($this->params['defaultPath'] . '/images/touxiang.jpg', ['class'=>'img-rounded']) . 'admin', 'javascript:void(0)', ['title'=>'admin(admin)', 'target'=>'win']) ?>
            </li>
        </ul>
    </div>
</div>
<div class="easyui-panel easyui-layout-west">
    <div class="easyui-panel-body">
        <?php
        switch(Yii::$app->request->get('aside')){
            case 'cate': echo $this->render('aside_cate'); break;
            case 'user': echo $this->render('aside_user'); break;
            case 'option': echo $this->render('aside_option'); break;
            default: echo $this->render('aside_index'); break;
        }
        ?>
    </div>
</div>
<div class="easyui-panel easyui-layout-center">
    <div class="easyui-panel-body"><?= $content ?></div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
