<?php 

namespace App\Core;

class Controller 
{
    /*
    * @var $view, $data
    * return view
    */
    public function view($view, $data = [])
    {
        extract($data);
        require_once(__ROOT__.'/Resources/views/header.php');
        require_once(__ROOT__.'/Resources/views/'.$view.'.php');
        require_once(__ROOT__.'/Resources/views/footer.php');

    }
}