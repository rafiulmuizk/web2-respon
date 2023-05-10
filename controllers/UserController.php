<?php

namespace app\controllers;
use yii\web\controller;
use yii\data\pagination;
use app\models\User;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTes()
    {
        $users = User::find()->all();
        return $this->render('tes', [
        'users' => $users,
    ]);
    }


}
