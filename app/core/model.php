<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database ;

class model{

    static function db(){



        // make a connection to mysql here
            $options = [
                //required
                'username' => USERNAME,
                'database' => DATABASE,
                //optional
                'password' => '',
                'type' => DATABASE_TYPE,
                'charset' => 'utf8',
                'host' => SERVER,
                'port' => '3306'
            ];
    
            return $db = new Database($options);
    
    
        }
    
}