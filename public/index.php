<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Vehicle\Air\Helicopter;
use App\Vehicle\Boat\Cuirasse;

$bateau = new Cuirasse('Bruno', 2020, 'Cuirassé', 200);
$bateau->avancer();

$helicopter = new Helicopter();
$helicopter->avancer();