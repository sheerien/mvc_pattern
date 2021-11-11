<?php
namespace BootStrap;

use Core\Http\Route;
use Core\Http\Request;
use Core\Http\Response;

class App
{
    protected Request $request;

    protected Response $response;

    protected Route $route;

    /**
     * __construct for class App
     */
    public function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->route = new Route($this->request, $this->response);
    }

    /**
     * boot App
     * @return void
     */
    public function boot()
    {
        $this->route->resolve();
    }

    /**
     * Summary of __get
     * @param mixed $prop
     * @return mixed
     */
    public function __get($prop)
    {
        if(property_exists($this, $prop)){
            return $this->$prop;
        }
    }

}