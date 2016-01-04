<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
		    [
			'allow' => true,
			'matchCallback'=> function ($rule, $action) {
				return Yii::$app->user->identity != null && Yii::$app->user->identity->is_admin;
			}
		    ]
                ],
            ],
        ];
    }

    /**
     * List all adminpanels
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
