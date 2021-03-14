<?php

use app\attributes\ListenTo;
use app\attributes\ProductCreated;
use app\attributes\ProductDeleted;

#[Attribute]
class ProductSubscriber
{
    #[
        \app\attribute\SampleAttrobite('hoge'),
        ListenTo(\app\attributes\Product::EVENT_CREATED)
    ]
    public function onProductCreated(ProductCreated $event) { /* _ */ }

    #[ListenTo(\app\attributes\Product::EVENT_DELETED)]
    public function onProductDeleted(ProductDeleted $event) { /* _ */ }
}

$reflectionClass = new ReflectionClass(ProductSubscriber::class);
$m = $reflectionClass->getMethod('onProductCreated');
echo '<pre>';
// var_dump($reflectionClass->getAttributes());
// var_dump($m->getAttributes());
// var_dump($m->getAttributes()[0]->getName());
var_dump($m->getAttributes()[0]->getArguments());
echo '</pre>';
