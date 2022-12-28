<?php

if(!empty($_POST)){
    $_SESSION["name"]= $_POST["name"];
    $_SESSION["password"]= $_POST["password"];
    }
    
    echo $_SESSION["name"];


if(isset($_POST['btn'])){
unset($_SESSION["name"]);
unset($_SESSION["password"]);
header('location:login.php');
}
?>

<form action="" method="post">
    <input type="submit" name="btn" value="logout">
</form>