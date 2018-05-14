<?php
require_once 'php_character.php';

class Doragon extends Character {

    public function __construct($name, $hp, $power, $defence) {
        parent::__construct($name, $hp, $power, $defence);
    }
    
    //バトル展開
    public function battle($enemy){
        $i = mt_rand(0, 4);
        switch($i){
            case 0: return $this->big_blow($enemy); break;
            case 1: return $this->basic($enemy); break;
            case 2: return $this->basic($enemy); break;
            case 3: return $this->basic($enemy); break;
            case 4: echo $this->name . 'は様子を覗っている' .PHP_EOL;
                    return $enemy->hp;break;
        }
    }
    
    //回復
    public function recovery(){
        return mt_rand(15, 20);
    }
    
}
