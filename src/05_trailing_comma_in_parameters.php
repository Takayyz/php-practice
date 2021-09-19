<?php

/**
 * @param string $name
 * @param int $age
 */
function hello(string $name, int $age,): string
{
    echo "Hello {$name}!, Your age is {$age}";
}

hello(age: 30, name: 'Taka');
