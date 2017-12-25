<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;

class SettingController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionEdit($type = 'web')
    {
        return $this->render('edit');
    }
}
