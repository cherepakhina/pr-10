<?php
session_start();
require_once 'connection.php';

$login = $_POST['login'];

$password = $_POST['password'];  

if (count($_POST) > 0) {
    $res = mysqli_query ($conn, "select * from `users` where login='$login' and password='$password';");
    $row = mysqli_fetch_array($res);
    if (is_array($row)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['auth'] = true;
} else
{
    echo 'Invalid password';
    $_SESSION['auth'] = false;
}
}

header("Location: http://localhost/restricted.php");
exit();
?>
