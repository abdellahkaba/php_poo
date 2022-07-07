<?php
namespace Controllers;

use Source\Render;

class ProduitController {

    public function index(){
        
        $render = new Render('produits/index');

        return $render->view();
    }
}