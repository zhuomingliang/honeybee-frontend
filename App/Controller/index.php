<?php
require_once APP_DIR . 'App/Model/user.php';

Class IndexController extends Controller {
    public function __construct(){
        parent::__construct();

        echo $this->_PATH_INFO, "<br>";
        echo 'hello';

        $user = new User();
        //print_r($user->getUserById(1));
    }

    public function route($controller_name = 'Index'){
        parent::route($controller_name);
    }
}

?>