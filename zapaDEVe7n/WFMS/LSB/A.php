<?php

namespace zapaDEVe7n\WFMS\LSB;

class A
{
    const TEST = 'Class A';

    public function getTest()
    {
        var_dump(self::TEST);
    }

    public function getTest2()
    {
        var_dump(static::TEST);
    }
}