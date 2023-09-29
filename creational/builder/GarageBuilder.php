<?php

namespace patterns\creational\builder;

class GarageBuilder implements Builder {
    private Garage $garage;

    public function __construct()
    {
        $this->reset();
    }

    public function reset() {
        $this->garage = new Garage();
    }

    public function addWalls()
    {
        $this->garage->details[] = 'Garage walls';
    }

    public function addRoof()
    {
        $this->garage->details[] = 'Garage roof';
    }

    public function addDoor()
    {
        $this->garage->details[] = 'Garage door';
    }

    public function addWindows()
    {
        // TODO: Implement addWindows() method.
    }

    public function getResult(): Garage
    {
        return $this->garage;
    }
}