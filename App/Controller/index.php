<?php
Class Index extends Controller {
    public function __construct(){
        parent::__construct();
        
        echo $this->_PATH_INFO;
        echo 'hello';
    }
}
?>