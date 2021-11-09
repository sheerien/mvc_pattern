<?php
namespace App\Controllers;

use Core\View\View;

class HomeController
{
    public function index()
    {
        // echo "Home Controller " . $id[1];
        return View::make('home');
    }
}