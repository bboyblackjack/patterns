<?php

use patterns\creational\builder\Director;
use patterns\creational\builder\GarageBuilder;
use patterns\creational\builder\HouseBuilder;

require_once "../../vendor/autoload.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

$builder = new HouseBuilder();
$director = new Director($builder);
$director->make('perfect');

$house = $builder->getResult();

$house->getDetails();

echo "<br>";

$builder2 = new GarageBuilder();
$director->changeBuilder($builder2);
$director->make();

$garage = $builder2->getResult();

$garage->getDetails();