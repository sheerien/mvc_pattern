<?php

define('DR', DIRECTORY_SEPARATOR);

if(! function_exists('env')){
    /**
     * set key for env
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    function env($key, $default = null){

        return $_ENV[$key] ?? value($default);

    }

}

if(! function_exists('value')){
    /**
     * set value from action routers
     * @param mixed $value
     * @return mixed
     */
    function value($value){

        return ($value instanceof Closure) ? $value() : $value;
        
    }
}


if (!function_exists('base_path')) {

    /**
     * base path for root
     * @return string
     */
    function base_path(){
        return dirname(__DIR__) . DR . '..'. DR;
    }
}

if (!function_exists('main_path_layout')) {

    /**
     * base path for root
     * @return string
     */
    function main_path_layout(){
        return base_path() . 'views' . DR . 'layouts' . DR . 'main.php';
    }
}