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
<<<<<<< HEAD
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
=======
        return $this->view('welcome', ["name" => "Cogip"]);
    }
}
>>>>>>> dev
