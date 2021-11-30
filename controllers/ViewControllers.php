<?php

namespace app\controllers;

use app\config\Database;

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
    public static function deleteuser()
    {
        print_r($_GET);
        $con = Database::connect();
        $stmt = $con->prepare("SELECT * FROM user WHERE(id=:id)");
        $stmt->bindValue(':id', $_GET['userid']);
        $stmt->execute();
        $row = $stmt->rowCount();
        print_r($row);
        if ($row > 0) {
            echo 'there is a user with that id';
            $stmt1 = $con->prepare("DELETE FROM user WHERE id=:id");
            $stmt1->bindValue(':id', $_GET['userid']);
            if ($stmt1->execute()) {
                header("Location:/");
            }
        } else {
            echo 'no user found';
        }
    }

}