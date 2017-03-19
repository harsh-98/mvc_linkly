<?php
require_once __DIR__ . "/../vendor/autoload.php";
ToroHook::add("404",function(){echo "404";http_response_code(404);});

Toro::serve(['/' => Link\Controllers\HomeController::class,
	'/sign-up.php' => Link\Controllers\HomeController::class,
"/login.php"=>Link\Controllers\UserController::class,
"/link.php"=>Link\Controllers\UserController::class,
"/link"=>Link\Controllers\LinkController::class,

]);

?>

