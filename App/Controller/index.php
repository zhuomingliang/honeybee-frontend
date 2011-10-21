<?php
Class IndexController extends Controller {
    public function __construct(){
        parent::__construct();

        echo 'hello';
    }

    public function route($controller_name = 'Index'){
        parent::route($controller_name);
    }
}

?>