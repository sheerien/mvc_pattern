<?php

use Dotenv\Dotenv;
define("DS_PATH", DIRECTORY_SEPARATOR);
$helper_path = DS_PATH ."..". DS_PATH ."src". DS_PATH .'Supports'. DS_PATH .'helper.php';
require_once __DIR__ . $helper_path;
// require_once  base_path() . "vendor/autoload.php";
require_once autoload_path();

require_once base_path() . "Routes/web.php";

$env = Dotenv::createImmutable(base_path());

$env->load();


app()->boot();
// var_dump(app());

// var_dump(autoload_path());