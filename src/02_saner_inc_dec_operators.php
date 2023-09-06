<?php

declare(strict_types=1);

echo "---------- Path to Saner Increment/Decrement operators ----------\n";

/**
 * memo:
 * 文字列にインクリメントすると次の文字になるけどデクリメントは効かない。
 *
 * これを改善し、++$iは$i+1と同じ挙動になることを目指す。
 * intとfloat以外の型へのインクリメント・デクリメントはPHP8.3でDeprecatedとなり、PHP9で動かなくなる。
 */

// INFO: intへdecrementなので問題なし
$i = 10;
var_dump($i - 1); // int(9)
var_dump(--$i); // int(9)

$n = null;
var_dump($n - 1); // int(-1)
/**
 * Warning: Decrement on type null has no effect, this will change in the next major version of PHP
 */
var_dump(--$n); // null

var_dump($n + 1); // int(1)
var_dump(++$n); // int(1)

/**
 * Warning: Decrement(Increment) on type bool has no effect, this will change in the next major version of PHP
 */
$false = false;
var_dump(--$false); // false
var_dump(++$false); // false

/**
 * Warning: Decrement(Increment) on type bool has no effect, this will change in the next major version of PHP
 */
$true = true;
var_dump(--$true);
var_dump(++$true);

$s = 'foo';
// var_dump($s - 1); // Fatal error
/**
 * Deprecated: Decrement on non-numeric string has no effect and is deprecated
 */
var_dump(--$s); // string('foo')

// var_dump($s + 1); // Fatal error
var_dump(++$s); // string('fop')

/**
 * Deprecated: Decrement on empty string is deprecated as non-numeric
 */
$emptyString1 = '';
var_dump(--$emptyString1);
/**
 * Deprecated: Increment on non-alphanumeric string is deprecated
 */
$emptyString2 = '';
var_dump(++$emptyString2);
