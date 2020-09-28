<?php

use MVC\Model;

class ModelsHome extends Model {

    public function getAllUserLogin() {
        // can you connect to database
        return $this->db->query(  "SELECT * FROM `loginlogs` WHERE `action` = 'login' GROUP BY`date` ");

 
    }
	 public function getAllUserLogout() {
        // can you connect to database
        return $this->db->query(  "SELECT * FROM `loginlogs` WHERE `action` = 'loginout' GROUP BY`date` ");

 
    }
}
