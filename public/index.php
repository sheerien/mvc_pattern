<?php

use Core\Http\Route;
use Core\Http\Request;
use Core\Http\Response;
use Dotenv\Dotenv;

require_once __DIR__ . "/../src/Supports/helper.php";
require_once  base_path() . "vendor/autoload.php";

require_once base_path() . "Routes/web.php";

$env = Dotenv::createImmutable(base_path());

$env->load();

// var_dump($_ENV);

// var_dump((new Request)->path());
// var_dump((new Request)->options());

$route = new Route(new Request, new Response);


$route->resolve();

// var_dump(nav_path('navbar'));