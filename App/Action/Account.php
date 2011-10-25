<?php

class AccountAction extends Action {
    public function __construct($path_info) {
        echo $path_info, ' from account';
        $user = new User();
        $this->data = $user->getUserById(1);
    }


    public function show() {
        $this->include_template('account.php');
    }
}
?>