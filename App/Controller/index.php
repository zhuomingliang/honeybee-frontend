<?php
Class Index extends Controller {
    public function __construct(){
        parent::__construct();

        echo $this->_PATH_INFO, "<br>";
        echo 'hello';

        $result = db_select('users','u')
            ->fields('u', array('id', 'name', 'nick_name'))
            ->range(0,1)
            ->execute()
            ->fetchAssoc();


        print_r($result);
    }

}

?>