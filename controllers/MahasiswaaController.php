<?php

namespace app\controllers;
use yii\web\controller;
use yii\data\pagination;
use app\models\Mahasiswa;

class MahasiswaaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionYes()
    {
        $users = Mahasiswa::find()->all();
        return $this->render('yes', [
        'mahasiswa' => $users,
    ]);
    }


}
