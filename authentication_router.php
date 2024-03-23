<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/signin/signin.controller.php',
    '/signup' => 'controllers/signup/signup.controller.php',
    '/resetPwd' => 'controllers/reset/reset_Password.controller.php',
    '/securityCode' => 'controllers/reset/forgetPass_code.controller.php',
    '/recoverPassword' => 'controllers/reset/new_Password.controller.php',
    // '/createRes'=> 'controllers/restaurant_owner/create_restaurant.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require $page;
