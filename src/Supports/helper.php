<?php

define('DS', DIRECTORY_SEPARATOR);
define('MAIN_LAYOUTS_FILE_PATH', 'views' . DS . 'layouts' . DS . 'main.php');
define('VIEW_PATH', 'views' . DS);
define('ERROR_PATH', 'views' . DS .'errors' . DS);

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
}