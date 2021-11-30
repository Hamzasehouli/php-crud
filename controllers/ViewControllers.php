<?php

namespace app\controllers;

class ViewControllers
{
    public static function overview()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_overview.php';
    }
    public static function addUser()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_addUser.php';
    }
    public static function updateUser()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_updateuser.php';
    }

}