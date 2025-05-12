<?php

use App\Person\Homme;
use App\Vehicle\Boat\Cuirasse;
use App\Vehicle\Boat\Destroye;

require __DIR__ . '/../vendor/autoload.php';

$destroye = new Destroye('Bateau destroy', 2000, 'Destroye', 200);
$cuirasse = new Cuirasse('Bateau carapuce', 2005, 'Cuirasse');

//echo $destroye::TYPE;
echo '<br>';
echo $destroye->getName();
echo '<br>';
echo '<br>';

echo $cuirasse::TYPE;
echo '<br>';
