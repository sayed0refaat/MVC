<?php

namespace MVC\models;

use MVC\core\model;

class user extends model {



    public function GetAllUsers() {
        $data=model::db()->rows("select * FROM user");
        return $data;
        
    }



    public function GetUser($email,$password) {
        $data=model::db()->rows("select * FROM user where `email`=? && `password`=? ",[$email,$password]);
        return $data;

        
    }

}