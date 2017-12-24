<?php
return [
    'version' => '1.0',  // 应用版本号
    'timeZone' => 'PRC',  // 时区, 中国
    'charset'=>'UTF-8',   // 字符集, 万国码(默认)
    'language'=>'zh-CN',  // 语言, 简体中文
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
