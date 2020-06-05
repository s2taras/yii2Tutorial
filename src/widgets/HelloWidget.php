<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    /** @var null|string */
    public $message;

    public function init()
    {
        parent::init();

        if ($this->message === null) {
            $this->message = 'Hello Widget';
        }
    }

    /**
     * @return string
     */
    public function run()
    {
        return Html::encode($this->message);
    }
}