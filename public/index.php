<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Database\DbConnection;
use App\Vehicle\Air\Helicopter;
use App\Vehicle\Boat\Cuirasse;

DbConnection::getPdo();






/*$query = DbConnection::getPdo()->prepare('SELECT * FROM user');
$query->execute();
$users = $query->fetchAll();


$query = DbConnection::getPdo()->prepare('SELECT * FROM user where id = 1');
$query->execute();
$users = $query->fetch();*/

/*$bateau = new Cuirasse('Bruno', 2020, 'Cuirassé', 200);
$bateau->avancer();

$helicopter = new Helicopter();
$helicopter->avancer();*/