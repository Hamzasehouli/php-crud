<?php
session_regenerate_id();

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_head.php';?>
<title>Add a user</title>

<body>

    <header class="header">
        <nav class"nav">
            <a href="/">Home</a>
            <ul class="nav__list">
                <?php if ($_SESSION['isLoggedIn'] === true) {

    ?>

                <li class="nav__item">
                    <form action="/api/v1/auth/logout" method="post">
                        <button type="submit" class="btn btn-primary">Log out</button>
                    </form>
                </li>
                <li class="nav__item">
                    <p>user@gmail.com</p>
                </li>
                <?php } else {?>
                <li class="nav__item">
                    <a class="nav__link btn-primary anch" href="/login">login</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link btn-primary anch" href="/signup">signup</a>
                </li>
                <?php }?>
            </ul>
        </nav>
    </header>

</body>

</html>