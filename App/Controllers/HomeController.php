<?php
namespace App\Controllers;


class HomeController
{
    public function index()
    {
        // echo "Home Controller " . $id[1];
        return view('home');
    }
}