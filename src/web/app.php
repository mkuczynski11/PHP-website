<?php
require '../vendor/autoload.php';
require '../Router.php';

session_start();
$router = new Router();

$router->get('/img/new', 'ImgController::new');
$router->get('/images_list', 'ImgController::show');
$router->post('/img/adding', 'ImgController::add');

$router->get('/signup', 'UserController::signup');
$router->post('/signup/add', 'UserController::add');
$router->get('/signup/completed', 'UserController::completed');
$router->get('/signout', 'UserController::signout');

$router->get('/login', 'UserController::login');
$router->post('/login/verify', 'UserController::verify');

$router->post('/img/new_favourite', 'FavouriteController::add');
$router->get('/imgs/favourite', 'FavouriteController::show');
$router->post('/imgs/remove_favourite', 'FavouriteController::remove');

$router->get('/', 'StaticController::stronaglowna');
$router->get('/kibicowanie', 'StaticController::kibicowanie');
$router->get('/formularz', 'StaticController::formularz');
$router->get('/zbudujdruzyne', 'StaticController::zbudujdruzyne');

$router->_404('ErrorController::_404');

$view = $router->dispatch();
$view->render();
