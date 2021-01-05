<?php
include_once "../core/Template.php";
use Core\Request;
use Core\Router;
use Core\Template;

$router = new Router(new Request);

$router->get('/', function () {
    return "Hello world";
});


$router->get('/profile/hung', function ($request) {
    
    $template = new Template(['lang' => 'fr']);
    return $template->render('profile.php', ['content' => 'profile Page']);
});

$router->post('/data', function ($request) {

    return json_encode($request->getBody());
});
