<?php

namespace app\attributes;

#[Attribute]
class SampleAttrobite
{

    public function __construct(public string $event)
    {
        //
    }
}
