<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('front-end/body',["name" => "Cogip"]);
    }
    
    /*
    * return view
    */
    public function test()
    {
        return $this->view('front-end/body',[]);
    }
}
