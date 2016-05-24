<?php

require __DIR__.'/vendor/autoload.php';

use Generator\TriangularNumberGenerator;

$triangularNumbers = TriangularNumberGenerator::gen(15);
foreach ($triangularNumbers as $number)
{
    echo $number.PHP_EOL;
}
