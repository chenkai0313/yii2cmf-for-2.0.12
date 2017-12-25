<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;

$this->title = '首页';
$this->params['breadcrumbs'][] = ['label'=>'内容管理', 'url'=>'javascript:void()'];
$this->params['breadcrumbs'][] = ['label'=>'文章管理', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="default-site">
    <div class="welcome-info">
        <?= Html::img($this->params['defaultPath'] . '/images/sun.png', ['alt'=>'天气', 'title'=>'天气']) ?>
        <b>Admin 早上好，欢迎使用信息管理系统。</b>
        <a href="javascript:void(0)">帐号设置</a>
    </div>
    <div class="welcome-info">
        <?= Html::img($this->params['defaultPath'] . '/images/time.png', ['alt'=>'时间', 'title'=>'时间']) ?>
        <i>您上次登录的时间：2013-10-09 15:22</i> （不是您登录的？<a href="#">请点这里</a>）
    </div>
    <div class="shortcut">
        <h3>快捷操作</h3>
        <ul class="clearfix">
            <li><a href="javascript:void(0)"><?= Html::img($this->params['defaultPath'] . '/images/ico01.png', ['alt'=>'管理设置', 'title'=>'管理设置']) ?><p>管理设置</p></a></li>
            <li><a href="javascript:void(0)"><?= Html::img($this->params['defaultPath'] . '/images/ico02.png', ['alt'=>'发布文章', 'title'=>'发布文章']) ?><p>发布文章</p></a></li>
            <li><a href="javascript:void(0)"><?= Html::img($this->params['defaultPath'] . '/images/ico03.png', ['alt'=>'数据统计', 'title'=>'数据统计']) ?><p>数据统计</p></a></li>
            <li><a href="javascript:void(0)"><?= Html::img($this->params['defaultPath'] . '/images/ico04.png', ['alt'=>'文件上传', 'title'=>'文件上传']) ?><p>文件上传</p></a></li>
            <li><a href="javascript:void(0)"><?= Html::img($this->params['defaultPath'] . '/images/ico05.png', ['alt'=>'目录管理', 'title'=>'目录管理']) ?><p>目录管理</p></a></li>
            <li><a href="javascript:void(0)"><?= Html::img($this->params['defaultPath'] . '/images/ico06.png', ['alt'=>'数据查询', 'title'=>'数据查询']) ?><p>数据查询</p></a></li>
        </ul>
    </div>
    <table class="table table-bordered">
        <caption>信息统计</caption>
        <thead>
        <tr><th class="text-center">统计</th><th class="text-center">资讯库</th><th class="text-center">图片库</th><th class="text-center">产品库</th><th class="text-center">用户</th><th class="text-center">管理员</th></tr>
        </thead>
        <tbody>
        <tr class="text-center"><td>分类数</td><td>92</td><td>9</td><td>0</td><td>8</td><td>20</td></tr>
        <tr class="text-center"><td>总数</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
        <tr class="text-center"><td>待审核</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
        <tr class="text-center"><td>已发布</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
        <tr class="text-center"><td>回收站</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <caption>服务器信息</caption>
        <tbody>
        <tr><td>服务器IP地址</td><td><?= GetHostByName($_SERVER['SERVER_NAME']) ?></td></tr>
        <tr><td>服务器操作系统 </td><td><?= php_uname('s') ?></td></tr>
        <tr><td>服务器环境 </td><td><?= PATH_SEPARATOR === ';' ? apache_get_version() : apache_get_version() . ' / PHP ' . PHP_VERSION  ?></td></tr>
        <tr><td>MySQL版本 </td><td><?php // Yii::$app->db->pdo->getAttribute(PDO::ATTR_SERVER_VERSION) ?></td></tr>
        <tr><td>站点根目录 </td><td><?= Yii::getAlias('@webroot') ?></td></tr>
        <tr><td>框架版本 </td><td><?= Html::a('Yii ' . Yii::getVersion(), 'http://www.yiichina.com', ['target'=>'_blank', 'title'=>'Yii中文网']) ?></td></tr>
        <tr><td>文件上传限制 </td><td><?= ini_get('upload_max_filesize') ?></td></tr>
        <tr><td>表单提交限制 </td><td><?= ini_get('post_max_size') ?></td></tr>
        <tr><td>执行时间限制 </td><td><?= ini_get('max_execution_time') ?>秒</td></tr>
        </tbody>
    </table>
</div>