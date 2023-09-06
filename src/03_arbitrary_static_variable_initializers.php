<?php

declare(strict_types=1);

echo "---------- Arbitrary static ariable initializers ----------\n";

function funcForStaticProperty(): int
{
    echo "funcForStaticProperty() called\n";
    return 1;
}

function funcBelongsStaticProperty(): void
{
    /**
     * INFO: staticプロパティに動的に値を設定できるようになった
     */
    static $x = funcForStaticProperty();
    var_dump($x++);
}

funcBelongsStaticProperty();
funcBelongsStaticProperty();
funcBelongsStaticProperty();

// function duplicateDeclaration(): void
// {
//     /**
//      * staticプロパティを重複で宣言はFatal error
//      */
//     static $x = 1;
//     static $x = 2;
//     var_dump($x);
// }
