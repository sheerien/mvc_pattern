<?php

use Dotenv\Dotenv;

define("DS_PATH", DIRECTORY_SEPARATOR);

$autoload_path = DS_PATH ."..". DS_PATH ."vendor". DS_PATH .'autoload.php';

require_once __DIR__ . $autoload_path;

require_once webroute_path();

$env = Dotenv::createImmutable(base_path());

$env->load();


app()->boot();

// var_dump(autoload_path());