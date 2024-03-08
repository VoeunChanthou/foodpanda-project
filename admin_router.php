<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/admin/admin.controller.php',
    '/profile_admin' => 'controllers/admin/admin.upload_profile.controller.php'
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";