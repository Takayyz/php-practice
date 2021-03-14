<?php

class Product
{
    public function __destruct()
    {
        echo "Destroyed<br>";
    }
}

$p1 = new Product();
$reviews = new WeakMap();
$reviews[$p1] = [5, 5, 4];
// $p2 = $p1;

echo '<pre>';
var_dump($reviews);
echo '</pre>';

unset($p1); // $p2が参照しているためここではまだ破棄されない
echo "Unset<br>";
echo '<pre>';
// var_dump($p2);
var_dump($reviews);
echo '</pre>';
