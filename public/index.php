<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Article\Controller\ArticleController;
use App\Routing\Router;
use App\User\Controller\UserController;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

// $_SERVER['REQUEST_METHOD'] = GET dans la class  $this->method
// $_SERVER['REQUEST_URI'] =  article/list dans la class  $this->uri
$router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

// GET = méthode utilisée dans le navigateur
// /user/list = l'url dans le navigateur après l'host (on parle d'URI)
// MaClass = la class à charger pour appeler le dernire paramètre
// listUser = la fonction (méthode) à appeler dans la class MaClass
$router->register('GET', '/user/list', UserController::class, 'list');
$router->register('GET', '/article/list', ArticleController::class, 'listArticle');

/*echo '<pre>';
print_r($router->getRoutes());
echo '</pre>';*/

// si uri = /article/list
// va chercher le $this->routes qui est égal à /article/list
// on charge le controller lié et on éxécute l'action donnée
$data = $router->run();

/*echo 'echo des datas';
echo '<pre>';
print_r($data);
echo '</pre>';*/

// afficher le template que l'on récupère des data
echo $data['template'];