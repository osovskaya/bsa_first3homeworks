<?php

namespace Greeting;

class Greeting
{
    use RandomQuote;

    public static function say($name)
    {
        echo sprintf("Hi, %s! There is a new quote for you: %s.<br>", $name,
            self::$quotes[array_rand(self::$quotes)]);
    }
}
