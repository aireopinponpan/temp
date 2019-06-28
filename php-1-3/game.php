<?php

namespace TechAcademy\RPG;

require_once 'hero.php';
require_once 'slime.php';

use TechAcademy\RPG\Characters\Hero;

class Game {
    static function start() {
        \TechAcademy\RPG\Characters\Slime::description();
        
        Hero::description();
        
        $slime_A = new Characters\Slime(10, 3, 0, 'A');
        $hero = new Hero(1000, 30, 20);
        
        $slime_A->attack($hero);
        $hero->attack($slime_A);
    }
}

Game::start();