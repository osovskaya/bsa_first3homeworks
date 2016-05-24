<?php

namespace Generator;

class TriangularNumberGenerator
{
    public static function gen($n)
    {
        for ($i = 0; $i <= $n; $i++)
        {
            yield ($i * ($i + 1)) / 2;
        }
    }
}