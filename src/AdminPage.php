<?php
    session_start();
    if ($_SESSION['login'] !=1) header("location:index.php");

    if(isset($_GET['logout'])){
        header("location:index.php");
        setcookie('login' , null , -1);
        unset($_SESSION['login']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to admin page</h1>
    <form action='#' method='get'>
        <button type="submit" name='logout'>
            Logout
        </button>
    </form>
    
</body>
</html>
