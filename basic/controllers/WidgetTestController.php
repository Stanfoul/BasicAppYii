<?php

namespace app\controllers;
// use Yii; - тоже тут для закачки

class WidgetTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $search_some = 'примеры';

        return $this->render('index');

        // return Yii::$app->response->sendFile('files/CONFIDENTIAL.txt')->send(); - вот так можно сделать закачку файла
    }

}
