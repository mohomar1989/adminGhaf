<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cityEn = $_POST['areaEn'];
$cityAr = $_POST['areaAr'];
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";


// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
$query = "INSERT INTO Area (area_id, area_name, ar_area_name) VALUES (NULL, '$cityEn', '$cityAr')";
mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
header("Location: ../Areas.php");