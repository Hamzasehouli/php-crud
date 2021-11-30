<?php
$id = $_GET['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/_head.php';?>
<title>Edit a user</title>

<body>

    <form method='post' action="/updateuser?userid=<?php print_r($id)?>" class="form" enctype="multipart/form-data">
        <div class="form__control">
            <label for="name" class="form__label">Name</label>
            <input name="name" type="text" id="name" class="form__input">
        </div>
        <div class="form__control">
            <label for="email" class="form__label">Email</label>
            <input name="email" type="email" id="email" class="form__input">
        </div>
        <div class="form__control">
            <label for="image" class="form__label">Image</label>
            <input name="image" id="image" type="file" class="form__input">
        </div>
        <button type="submit" class="btn btn-flat">Save</button>
    </form>

</body>

</html>