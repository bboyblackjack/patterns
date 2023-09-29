<?php

namespace patterns\creational\builder;

class Director {
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder) {
        $this->builder = $builder;
    }

    public function make(string $type = null) {
        $this->builder->addWalls();
        $this->builder->addRoof();
        $this->builder->addDoor();

        if($type == 'perfect') {
            $this->builder->addWindows();
        }
    }
}