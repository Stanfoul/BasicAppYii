<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hello = '������ ���!!!';
        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    }

}
