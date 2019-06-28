<?php

class Animal {
    //名前と年齢の変数
    public $name = '';
    public $old = '';
    
    //say関数
    function say() {
        print $this->name . 'です。' . $this->old . '歳です。' . PHP_EOL;
    }
}


