<?php

$numbers = [1, 2, 3, 4, 5, 6];

// arrayとcallbackがarray_filterで定義されている引数名
$evens = array_filter(
    array: $numbers,
    callback: function($num) {
        return $num %  2 == 0;
    }
);

// arrayとcallbackがarray_mapで定義されている引数名
// 本来array_mapは第一引数にcallback、第二引数にarrayを取るが、named argumentsの機能を利用して引数を入れ替え
$squares = array_map(
    array: $numbers,
    callback: function($num) {
        return $num * $num;
    }
);

$pos = strpos(haystack: 'Hello World', needle: 'World');

echo '<pre>';
var_dump($pos, $evens, $squares);
echo '</pre>';
