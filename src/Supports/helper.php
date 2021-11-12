<?php

use BootStrap\App;
use Core\View\View;

define('DS', DIRECTORY_SEPARATOR);
define('MAIN_LAYOUTS_FILE_PATH', 'views' . DS . 'layouts' . DS . 'main.php');
define('VIEW_PATH', 'views' . DS);
define('NAVBAR_PATH', 'views' . DS . 'partials' . DS);
define('ERROR_PATH', 'views' . DS .'errors' . DS);
define('AUTOLOAD_PATH', 'vendor'. DS .'autoload.php');
define('WEPROUTE_PATH', 'Routes'. DIRECTORY_SEPARATOR .'web.php');

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

/**
 *  singleton pattern for bootstrap system in one instance
 */
if(!function_exists('app')){

    /**
     * app function for bootstrap framework
     * @return App|null
     */
    function app(){
        static $instance = null;
        if(is_null($instance)){
            $instance = new App;
        }
        return $instance;
    }
}


if (!function_exists('base_path')) {

    /**
     * base path for root
     * @return string
     */
    function base_path($path = ''){
        if(!empty($path)){
            return dirname(__DIR__) . DS . '..' . DS. $path;
        }
        return dirname(__DIR__) . DS . '..'. DS;
    }
}

if (!function_exists('main_path_layout')) {

    /**
     * base path for root
     * @return string
     */
    function main_path_layout(){
        return base_path(MAIN_LAYOUTS_FILE_PATH) ;
    }


    if(!function_exists('view_path')){
        
        /**
         * Summary of view_path
         * @return string
         */
        function view_path(){
            return base_path(VIEW_PATH);
        }
    }

    if(!function_exists('error_path')){
        
        /**
         * Summary of error_path
         * @param string $errorPath
         * @return string
         */
        function error_path($errorPath = ''){
            if(!empty($errorPath)){
                return base_path(ERROR_PATH) . $errorPath;
            }
            return base_path(ERROR_PATH);
        }
    }


    if(!function_exists('nav_path')){
        
        function nav_path($path = ''){
            if(!empty($path)){
                return base_path(NAVBAR_PATH) . $path . '.php';
            }
            return base_path(NAVBAR_PATH) . 'navbar.php';
        }
    }

    if(!function_exists('view')){
        /**
         * Summary of view
         * @param mixed $view
         * @param mixed $params
         * @return void
         */
        function view($view, $params = []){
            View::make($view, $params);
        }
    }
}

if(!function_exists('autoload_path')){
    /**
     * autoload_path
     * @return string
     */
    function autoload_path(){
        return base_path(AUTOLOAD_PATH);
    }
}
if(!function_exists('webroute_path')){
    /**
     * webroute_path
     * @return string
     */
    function webroute_path(){
        return base_path(WEPROUTE_PATH);
    }
}