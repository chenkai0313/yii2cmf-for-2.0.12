<?php
/* @var $this \yii\web\View */

$this->title = '首页';
use yii\helpers\Url;
?>
<iframe src="<?php
switch(yii::$app->request->get('aside')){
    case 'cate': echo Url::to(['category/index']); break;
    case 'user': echo Url::to(['user/index']); break;
    case 'option': echo Url::to(['setting/edit', 'type'=>'web']); break;
    default: echo Url::to(['site/default']); break;
}
?>" id="win" name="win" width="100%" height="100%" frameborder="0">
</iframe>