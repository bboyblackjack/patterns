<?php

namespace patterns\creational\builder;

class Garage {
    public $details = [];

    public function getDetails() {
        echo 'Garage details: ' . implode(', ', $this->details);
    }
}