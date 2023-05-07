<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // memanggil view 'index'
        return $this->render('index');
    }

    public function actionDaftarNilai()
    {
        // memanggil view 'daftar-nilai'
        return $this->render('daftar-nilai');
    }

}
