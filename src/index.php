<?php

require_once __DIR__ . '/vendor/autoload.php';

function devider(): void
{
    echo "#############################\n";
}

function newLine(): void
{
    echo "\n";
}

devider();
echo 'Version: ' . phpversion() . "\n";
devider();
newLine();

require_once __DIR__ . '/01_making_overridden_method.php';
newLine();

require_once __DIR__ . '/02_saner_inc_dec_operators.php';
newLine();

require_once __DIR__ . '/03_arbitrary_static_variable_initializers.php';
newLine();
