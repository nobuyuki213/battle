<?php
class Character {
    public $name;
    public $hp;
    public $power;
    public $defence;
    
    public function __construct($name, $hp, $power, $defence) {
        $this->name = $name;
        $this->hp = $hp;
        $this->power = $power;
        $this->defence = $defence;
    }
    
    ///////////////////////////////////////
    
    //基本攻撃（選択）
    public function basic($enemy){
        $h_point = $this->attack($enemy);
        $this->death($h_point, $enemy);
        return $h_point;
    }
    //会心の一撃（選択）
    public function big_blow($enemy){
        $h_point = $this->big_attack($enemy);
        $this->death($h_point, $enemy);
        return $h_point;
    }
    
    //回復（選択）
    public function recovery(){
        return mt_rand(15, 20);
    }
    ////////////////////////////////////////
    
    //攻撃
    public function attack($enemy){
        $attack = (int)mt_rand($this->power * 1.3, $this->power * 1.8);
        $defence = (int)mt_rand($enemy->defence, $enemy->defence);
        $damage = $attack - $defence;
        echo $this->name . 'の攻撃！' . $enemy->name . 'に' . $damage . 'ポイントのダメージを与えた！' .PHP_EOL;
        return $enemy->hp - $damage;
    }
    
    //大攻撃！
    public function big_attack($enemy){
        $attack = (int)mt_rand($this->power * 2.3, $this->power * 2.8);
        $defence = (int)mt_rand($enemy->defence, $enemy->defence);
        $damage = $attack - $defence;
        echo $this->name . 'の会心の一撃が炸裂した！' . $enemy->name . 'に' . $damage . 'ポイントの大ダメージを与えた！' .PHP_EOL;
        return $enemy->hp - $damage;
    }
    
    //死亡判定
    public function death($h_point, $enemy){
        if ($h_point <= 0) {
            echo $enemy->name . 'の残りHPは0ポイント' .PHP_EOL;
            echo $this->name . 'は' . $enemy->name . 'を倒した' .PHP_EOL;
        } else {
            echo $enemy->name . 'の残りHPは' . $h_point . 'ポイント' .PHP_EOL;
        }
    }
}
