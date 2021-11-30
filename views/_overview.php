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
        <?php foreach ($users as $user):
    ?>
        <li class="users__item">
            <?php
if (!$user['image']) {

        ?>
            <img style="margin-right: 20px;" src="/public/images/no-user.png" class="users__img">
            <?php }?>
            <?php
if ($user['image']) {

        ?>
            <img style="margin-right: 20px;" src="/public/images/<?php echo $user['image'] ?>.png" class="users__img">
            <?php }?>
            <div class="users__details">
                <p class="users__info">id: <?php echo $user['id'] ?></p>
                <p class="users__info">id: <?php echo $user['name'] ?></p>
                <p class="users__info">Name: <?php echo $user['email'] ?></p>
            </div>
            <div class="users__btns"><a href="/updateuser?userid=<?php echo $user['id'] ?>" style="margin-right: 7px;"
                    class="btn btn-primary anch">Edit</a><a href="/deleteuser?userid=<?php echo $user['id'] ?>"
                    class="btn btn-danger anch">Delete</a>
            </div>
        </li>
        <?php endforeach;?>

        <a href="/adduser" style="margin-top: 10px;display:inline-block;" class="btn btn-primary anch" type=button>Add
            user</a>
    </ul>
    <?php }?>
</body>

</html>