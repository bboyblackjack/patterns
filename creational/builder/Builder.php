<?php

namespace patterns\creational\builder;

interface Builder {
    public function addWalls();
    public function addRoof();
    public function addDoor();
    public function addWindows();
}