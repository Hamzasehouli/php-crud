<?php

if(!empty($_POST)){
    // print_r($_POST);

}
if(!empty($_FILES)){
    
    $generateImageName = function($num){
        $chars = '1234567890QWERTZUIOPLKJHGFDSAYXCVBNMqwertzuioplkjhgfdsayxcvbnm';
        $imageName = '';
        $charsLen = strlen($chars);
        // echo $randoNum;
        for($i = 0; $i <= $num; $i++){
            $randoNum = rand(0,$charsLen);
            $imageName .= $chars[$randoNum];
        }
        return $imageName;
    };

    $imageName = $generateImageName(20);

    

    move_uploaded_file($_FILES["image"]["tmp_name"],$_SERVER['DOCUMENT_ROOT'] . '/public/images/'.$imageName.'.png');

}

?>


<!DOCTYPE html>
<html lang="en">
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/views/_head.php');?>
<title>Add a user</title>
<body>

<form method='post' action="/adduser" class="form" enctype="multipart/form-data">
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
<button type="submit" class="btn btn-flat">Add</button>
</form>
    
</body>
</html>