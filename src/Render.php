<?php

namespace Source ;

class Render {

    public function __construct(
        private string $viewPath
    )
    {}

    public function view(){
        ob_start();

        require BASE_VIEWS_PATH . $this->viewPath . '.php' ;

        return ob_get_clean();
    }
}