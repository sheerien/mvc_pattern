<?php

use Core\Http\Route;
use Core\Http\Request;
use Core\Http\Response;

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/../Routes/web.php";

// var_dump((new Request)->path());
// var_dump((new Request)->options());

$route = new Route(new Request, new Response);


$route->resolve();