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

    public function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->route = new Route($this->request, $this->response);
    }

    public function boot()
    {
        $this->route->resolve();
    }

    public function __get($prop)
    {
        if(property_exists($this, $prop)){
            return $this->$prop;
        }
    }

}