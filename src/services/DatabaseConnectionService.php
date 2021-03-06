<?php

namespace service;

use RedBeanPHP\R as R;

class DatabaseConnectionService
{
    public function connectDB()
    {
        if (!R::testConnection()) {
            R::setup(
                'mysql:host=localhost;dbname=todo',
                'bit_academy',
                'bit_academy' 
            );
            return true;
        }
        return false;
    }    
}