<?php

use app\config\Database;

$con = Database::connect();
$query = "SELECT * FROM user";

$stmt = $con->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_head.php';?>
<title>Home</title>

<body>

    <?php empty($users) ? print_r('There are no users, start adding') : ''?>
    <?php if (empty($users)) {?>
    <a href="/adduser" style="margin-top: 10px;display:inline-block;" class="btn btn-primary anch" type=button>Add
        user</a>
    <?php }?>
    <?php
if (!empty($users)) {?>
    <ul class="users__list">
        <li class="users__item">
            <img style="margin-right: 20px;" src="/public/images/4PcAnzeWSMs29UEXXODGu9.png" class="users__img">
            <div class="users__details">
                <p class="users__info">id: 12</p>
                <p class="users__info">Name: hamza</p>
                <p class="users__info">Email: hamza@test.com</p>
            </div>
            <div class="users__btns"><button style="margin-right: 7px;" class="btn btn-primary">Edit</button><button
                    class="btn btn-danger">Delete</button></div>
        </li>
        <li class="users__item">
            <img style="margin-right: 20px;" src="/public/images/4PcAnzeWSMs29UEXXODGu9.png" class="users__img">
            <div class="users__details">
                <p class="users__info">id: 12</p>
                <p class="users__info">Name: hamza</p>
                <p class="users__info">Email: hamza@test.com</p>
            </div>
            <div class="users__btns"><button style="margin-right: 7px;" class="btn btn-primary">Edit</button><button
                    class="btn btn-danger">Delete</button></div>
        </li>
        <li class="users__item">
            <img style="margin-right: 20px;" src="/public/images/4PcAnzeWSMs29UEXXODGu9.png" class="users__img">
            <div class="users__details">
                <p class="users__info">id: 12</p>
                <p class="users__info">Name: hamza</p>
                <p class="users__info">Email: hamza@test.com</p>
            </div>
            <div class="users__btns"><button style="margin-right: 7px;" class="btn btn-primary">Edit</button><button
                    class="btn btn-danger">Delete</button></div>
        </li>
        <a href="/adduser" style="margin-top: 10px;display:inline-block;" class="btn btn-primary anch" type=button>Add
            user</a>
    </ul>
    <?php }?>
</body>

</html>