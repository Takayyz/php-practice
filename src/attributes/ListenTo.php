<?php

namespace app\attributes;

#[Attribute]
class ListenTo
{

    public function __construct(public string $event)
    {
        //
    }
}
