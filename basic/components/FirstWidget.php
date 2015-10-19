<?php
/**
 * Created by PhpStorm.
 * User: stany_000
 * Date: 19.10.2015
 * Time: 13:00
 */
namespace app\components;
use yii\base\Widget;
class FirstWidget extends Widget {
    public $a;
    public $b;
    public function init () {
        parent::init();
        if($this->a === null) {
            $this->a = 0;
        }
        if($this->b === null) {
            $this->b = 0;
        }
    }
    public function run() {
        $c = $this->a + $this->b;
        return $this->render('first',
        [
            'c' => $c
        ]
        );
    }
}