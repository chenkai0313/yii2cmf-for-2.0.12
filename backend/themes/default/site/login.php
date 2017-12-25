<?php
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

use backend\assets\DefaultLoginAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

DefaultLoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title>default - 登录 - <?= Yii::$app->name ?></title>
    <?php $this->head() ?>
    <?= $this->registerLinkTag(['rel'=>'shortcut icon', 'href'=>Yii::$app->assetManager->getBundle(DefaultLoginAsset::className())->baseUrl . '/favicon.ico']); ?>
</head>

<body class="login-bogin">
<?php $this->beginBody() ?>
<div class="main"><div class="cloud1"></div><div class="cloud2"></div></div>
<div class="login-box">
    <div class="login-logo"></div>
    <div class="login-form">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template'=>'<td align="right">{label}</td><td>{input}</td><td>{error}{hint}</td>',
                'options'=>['tag'=>'tr', 'class'=>'form-group']
            ],
        ]) ?>
        <table class="table" width="450">
            <colgroup width="72"></colgroup>
            <colgroup width="228"></colgroup>
            <colgroup width="150"></colgroup>
            <?= $form->field($model, 'username')->textInput(['autofocus'=>true, 'class'=>'form-control login-user', 'placeholder'=>'用户名或邮箱']) ?>
            <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control login-pw', 'placeholder'=>'密码']) ?>
            <tr class="form-group">
                <td height="58"></td>
                <td>
                    <?= Html::submitButton('登 录', ['class' => 'submit', 'name' => 'login-button']) ?>
                    &nbsp;
                    <?= Html::activeCheckbox($model, 'rememberMe'); ?>
                </td>
                <td><a href="javascript:void(0)">忘记密码？</a></td>
            </tr>
        </table>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>