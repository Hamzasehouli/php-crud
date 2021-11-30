<?php

namespace app\controllers;

use app\config\Database;

class UserControllers
{

    public static function getAllUsers()
    {
        echo 'all users';
    }
    public static function addUser()
    {
        echo 'add user';
    }
    public static function getUser()
    {
        echo 'get user';
    }
    public static function updateUser($id)
    {
    }
    public static function deleteUser($id)
    {
        $con = Database::connect();
        $stmt = $con->prepare("SELECT * FROM user WHERE(id=:id)");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $row = $stmt->rowCount();
        print_r($row);
        if ($row > 0) {
            echo 'there is a user with that id';
            $stmt1 = $con->prepare("DELETE FROM user WHERE id=:id");
            $stmt1->bindValue(':id', $id);
            if ($stmt1->execute()) {
                header("Location:/");
            }
        } else {
            echo 'no user found';
        }
    }
    public static function updateUserTest($id)
    {print_r($id);
        $userId = $id;
        extract($_POST);

        // $image = null;
        // if ($_FILES['image']['tmp_name']) {
        //     $image = 'llll';
        // }

        $con = Database::connect();
        $stmt = $con->prepare("SELECT * FROM user WHERE(id=:id)");
        $stmt->bindValue(':id', $userId);
        $stmt->execute();
        $row = $stmt->rowCount();
        if ($row > 0) {
            $nameValidity = $name ? 'name=:name' : '';
            $emailValidty = $email ? 'email=:email' : '';
            // $imageValidiy = $image ? 'image=:image' : '';
            $query = "UPDATE user SET $nameValidity $emailValidty WHERE id=:id";
            print_r($query);
            $stmt1 = $con->prepare($query);

            $stmt1->bindValue(':id', $userId);
            if ($name) {
                $stmt1->bindValue(':name', $name);
            }

            if ($email) {
                $stmt1->bindValue(':email', $email);
            }

            // if (!$_FILES['image']['tmp_name']) {
            //     $stmt1->bindValue(':image', $image);
            // }

            if ($stmt1->execute()) {
                header("Location:/");
            }
        } else {
            echo 'no user found';
        }
    }

}