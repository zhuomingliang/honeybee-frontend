<?php

class User {
    public function getUserById($id, $fields = array()) {
        return db_select('users','u')
            ->fields('u', $fields)
            ->condition('id', $id)
            //->range(0,1)
            ->execute()
            ->fetchAssoc();
    }
}

?>