<?php
require_once 'php_hero.php';
require_once 'php_doragon.php';


$hero = new Hero('戦士', 100, 15, 7);
$monster = new Doragon('ドラゴン', 120, 13, 8);

// 実行関数
$monster->hp;
$hero->hp;
while($monster->hp > 0 && $hero->hp > 0){
    $monster->hp = $hero->battle($monster);
    if ($monster->hp <= 0){
        break;
    }
    $hero->hp = $monster->battle($hero);
}

// テスト関数
// var_dump($h_point = $hero->basic($monster));
