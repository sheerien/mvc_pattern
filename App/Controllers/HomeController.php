<?php
namespace App\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        // echo "Home Controller " . $id[1];
        return view('home');
        // return var_dump(app()); 
    }
}