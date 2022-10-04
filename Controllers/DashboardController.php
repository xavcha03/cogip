<?php

namespace App\Controllers;

use App\Core\Controller;

class DashBoardController extends Controller
{
    public function statistiques()
    {
        $this->view('dashboard/home', []);
    }


    public function callFormCompany()
    {
        $this->view('dashboard/companies/addform', []);
    }
}
