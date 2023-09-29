<?php

namespace patterns\creational\builder;

class HouseBuilder implements Builder {
    private House $house;

    public function __construct()
    {
        $this->reset();
    }

    public function reset() {
        $this->house = new House();
    }

    public function addWalls()
    {
        $this->house->details[] = "Wall";
    }

    public function addRoof()
    {
        $this->house->details[] = "Roof";
    }

    public function addDoor()
    {
        $this->house->details[] = "Door";
    }

    public function addWindows()
    {
        $this->house->details[] = "Windows";
    }

    public function getResult(): House
    {
        return $this->house;
    }
}