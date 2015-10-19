<?php
/**
 * Created by PhpStorm.
 * User: stany_000
 * Date: 19.10.2015
 * Time: 14:18
 */
namespace app\components;
use yii\base\Widget;
class SecondWidget extends Widget {
    public function init () {
        parent::init();
        ob_start();
    }
    public function run() {
        $content = ob_get_clean();
        return $this->render('second',
        [
            'content' => $content
        ]
        );
    }
}