<?php

namespace patterns\creational\builder;

class House {
    public $details = [];

    public function getDetails() {
        echo 'House details: ' . implode(', ', $this->details);
    }
}