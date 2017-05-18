<?php


$userName = $_POST['userName'];
$password = $_POST['password'];


session_start();
if($userName=="test@test.com" && $password=="test")
{
    $_SESSION['loggedin']=1;
    header('Location: home.php');
    die();
}

else
{
   $_SESSION['loginError']=1; 
   header('Location: login.php');
   die();
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

