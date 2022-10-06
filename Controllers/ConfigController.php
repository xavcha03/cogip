<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\ConfigModel;

class ConfigController extends Controller
{
    /**
     * 
     */
    public function install()
    {
        $model = new ConfigModel();
        $model->installBdd();
    }
}
