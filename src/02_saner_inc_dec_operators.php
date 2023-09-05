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
var_dump($i - 1); // 9
var_dump(--$i); // 9

$n = null;
var_dump($n - 1); // -1
/**
 * INFO: 現段階ではWarning
 * Warning: Decrement on type null has no effect, this will change in the next major version of PHP
 */
var_dump(--$n); // null

$s = 'foo';
var_dump($s - 1); // Fatal error
var_dump(--$s); // 'foo'

var_dump($s + 1); // Fatal error
// INFO: Deprecatedが出ない...？
var_dump(++$s); // 'fop'
