<?php

require_once 'thinkable.php';
require_once 'animal.php';

class Human extends Animal {
    use Thinkable;
    public $hobby = '';
    
    function __construct($name, $old, $hobby) {
        $this->name = $name;
        $this->old = $old;
        $this->hobby = $hobby;
    }
    
}
