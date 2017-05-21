<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cityEn = $_POST['cityEn'];
$cityAr = $_POST['cityAr'];
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";


// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");
$query = "INSERT INTO City (city_id, city_name, ar_city_name) VALUES (NULL, '$cityEn', '$cityAr')";
mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
header("Location: ../Cities.php");