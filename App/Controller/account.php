<?php
Class AccountController extends Controller {
    public function __construct(){
        parent::__construct();


        $this->_routes = array(
            '/^profile/' => 'Profile',
            '/^secure/' => 'Secure',
        );
        echo 'hello ';
    }

    public function route($controller_name = 'Account'){
        parent::route($controller_name);
    }
}

?>