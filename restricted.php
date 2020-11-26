<?php
session_start();

if($_SESSION['auth'] == false)
{
    echo "<!DOCTYPE html>
    <html>
    <head>
       <meta charset='UTF-8'>
       <meta name='viewport'
             content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
       <style>
           .container {
               width: 400px;
           }
       </style>
    </head>
    <body>
    <div class='container'>
            <p>Please sign up or log in to view this page.</p>
            <br>
            <a href='register.php'>Sign up</a>
            <br>
            <a href='login.php'>Login</a>
    </div>
     </body>
    
    </html>";
}
else
{
    echo "<!DOCTYPE html>
    <html>
    <head>
       <meta charset='UTF-8'>
       <meta name='viewport'
             content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <style>
           .container {
               width: 600px;
           }
       </style>
    </head>
    <body>
    <div class='container'>
    <iframe width='560' height='315' style='border:none;'
    src='https://www.youtube.com/embed/Pk0SjQSAb_8'>
    </iframe>
    </div>
     </body>
    
    </html>";
}
?>