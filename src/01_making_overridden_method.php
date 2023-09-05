<?php

declare(strict_types=1);

/**
 * memo:
 * 子クラスが親クラスの構造を意識した実装をしたい場合、
 * アトリビュートを付与することで親クラスの変更に気づきやすくなる。
 */

/**
 * 継承元になるクラス
 */
class Original {
    protected function foo(): void
    {
    }

    // INFO: このメソッドをコメントアウトすることでExtend2クラスがコンパイル時エラーになる
    protected function bar(): void
    {
    }
}

/**
 * fooメソッドはOriginalクラスに存在する為OK
 */
class Extend1 extends Original {
    #[\Override]
    public function foo(): void
    {
        echo "Extend1 foo\n";
    }
}

/**
 * barメソッドはOriginalクラスに存在しない為NG
 */
class Extend2 extends Original {
    #[\Override]
    public function bar(): void
    {
        echo "Extend2 bar\n";
    }
}

$extend1 = new Extend1();
$extend1->foo();

$extend2 = new Extend2();
$extend2->bar();
