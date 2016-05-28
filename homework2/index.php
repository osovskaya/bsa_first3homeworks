<?php

require __DIR__.'/vendor/autoload.php';

use LiftModel\Lift;

try
{
    $lift = new Lift(4, 9);
    $lift->loadPeople(4);
    $lift->moveToFloor(5);
    echo 'People Loaded ' . $lift->getPeopleLoaded() . PHP_EOL;
    echo 'Current Floor ' . $lift->getCurrentFloor() . PHP_EOL;
    $lift->unloadPeople();
    $lift->moveToFloor(9);
    $lift->unloadPeople(3);
    echo 'People Loaded ' . $lift->getPeopleLoaded() . PHP_EOL;
    echo 'Current Floor ' . $lift->getCurrentFloor() . PHP_EOL;
}
catch (MyException $e)
{
    echo $e->getMessage();
}

