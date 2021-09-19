<?php

namespace app\attributes;

#[Attribute]
class SampleAttribute
{

    public function __construct(public string $event)
    {
        //
    }
}
