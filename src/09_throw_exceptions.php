<?php

function devide($a, $b)
{
    return $b !== 0 ? $a / $b : throw new Exception('Can\'t devide on 0');
}

// $result = devide(1, 2);
$result = devide(1, 0);

echo '<pre>';
var_dump($result);
echo '</pre>';
