<?php

namespace LiftModel;

class Lift
{
    public $currentFloor = 1;
    public $peopleLoaded = 0;
    private $maxPeopleLoad = NULL;
    private $maxFloor = NULL;

    /**
     * Lift constructor.
     * @param $load
     * @param $floor
     */
    public function __construct($maxload, $maxfloor)
    {
        if ((!is_int($maxload) or $maxload < 1) or
            (!is_int($maxfloor) or $maxfloor < 1))
        {
            throw new \MyException('Lift parameters must be integer type and more than 1');
        }

        $this->maxPeopleLoad = $maxload;
        $this->maxFloor = $maxfloor;
    }

    /**
     * get current floor
     * @return int
     */
    public function getCurrentFloor()
    {
        return $this->currentFloor;
    }

    /**
     * get people loaded in a lift
     * @return int
     */
    public function getPeopleLoaded()
    {
        return $this->peopleLoaded;
    }

    /**
     * move lift to floor
     * @param $floor
     * @return bool
     * @throws \MyException
     */
    public function moveToFloor($floor)
    {
        if ($floor > $this->maxFloor)
        {
            throw new \MyException('Invalid floor');
        }

        // if people loaded more than max lift moving is blocked
        if ($this->peopleLoaded > $this->maxPeopleLoad)
        {
            throw new \MyException('Overload');
        }

        $this->currentFloor = $floor;
        return true;
    }

    /**
     * load people in a lift
     * @param int $people
     * @return bool
     * @throws \MyException
     */
    public function loadPeople($people = 1)
    {
        if (($this->peopleLoaded + $people) > $this->maxPeopleLoad * 2)
        {
            throw new \MyException('Overload');
        }

        $this->peopleLoaded += $people;
        return true;
    }

    /**
     * unload people from a lift
     * @param int $people
     * @return bool
     * @throws \MyException
     */
    public function unloadPeople($people = 1)
    {
        if (($this->peopleLoaded - $people) < 0)
        {
            throw new \MyException('Invalid number of people to unload');
        }

        $this->peopleLoaded -= $people;
        return true;
    }
}
