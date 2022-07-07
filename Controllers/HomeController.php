<?php

namespace Controllers ;

use Source\Render;

class HomeController {

    public function index(){
        
        $render = new Render('index');
       return $render->view();
    }
}