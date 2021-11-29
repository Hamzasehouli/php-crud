<?php

namespace app\controllers;

class ViewControllers{
    public static function overview()
    {
        
    }
     public static function addUser()
    {
        include_once($_SERVER['DOCUMENT_ROOT'] . '/views/_addUser.php');
    }
     public static function updateUser()
    {
        echo 'updtaes users';
    }
    
}