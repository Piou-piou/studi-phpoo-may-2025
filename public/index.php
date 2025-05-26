<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Article\Controller\ArticleController;
use App\Dashboard\DashboardController;
use App\Routing\Router;
use App\User\Controller\UserController;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

define('TEMPLATE_PATH', __DIR__.'/../templates/main.php');
define('ASSETS_PATH', '/assets/');


// $_SERVER['REQUEST_METHOD'] = GET dans la class  $this->method
// $_SERVER['REQUEST_URI'] =  article/list dans la class  $this->uri
$router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

// GET = méthode utilisée dans le navigateur
// /user/list = l'url dans le navigateur après l'host (on parle d'URI)
// MaClass = la class à charger pour appeler le dernire paramètre
// listUser = la fonction (méthode) à appeler dans la class MaClass
$router->register('GET', '/', DashboardController::class, 'index');
$router->register('GET', '/user/list', UserController::class, 'list');
$router->register('GET', '/article/list', ArticleController::class, 'listArticle');

// exemple d'une route pour créer un user
//$router->register(['GET', 'POST'], '/user/create', UserController::class, 'create');

// si uri = /article/list
// va chercher le $this->routes qui est égal à /article/list
// on charge le controller lié et on éxécute l'action donnée
echo $router->run();
