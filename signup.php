<?php

require_once 'connection.php';

if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (login, password) VALUES ('$login','$password')";
	 if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION['auth'] = true;
	 } else {
        echo "Error: " . $sql . "
        " . mysqli_error($conn);
	 }
     mysqli_close($conn);
        header("Location: http://localhost/restricted.php");
        exit();
}
?>