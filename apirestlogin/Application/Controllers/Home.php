<?php

use MVC\Controller;

class ControllersHome extends Controller {

    public function index() {

        // Connect to database
        $model = $this->model('home');

        // Read All Task
        $usersLogin = $model->getAllUserLogin();
        $usersLogout = $model->getAllUserLogin();
        // Prepare Data
        $data = ['datalogin' => $usersLogin, 'datalogout'=> $usersLogout];

        // Send Response
        $this->response->sendStatus(200);
		
        $this->response->setContent($data);
    }


 
}
