<?php

require_once 'Cuirasse.php';

$bateau = new Cuirasse('Bruno', 2020, 'Cuirassé', 200);
$bateau->avancer();

$helicopter = new Helicopter();
$helicopter->avancer();