<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$renter_first_name = $_POST['renter_first_name'];
$renter_last_name = $_POST['renter_last_name'];
$renter_email = $_POST['renter_email'];
$renter_username = $_POST['renter_username'];
$renter_number = $_POST['renter_number'];
$renter_password = $_POST['renter_password'];
$renter_national_id = $_POST['renter_national_id'];
$id = $_POST['renter_id'];




// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");
$query = "UPDATE Renter SET"
        . " renter_first_name = '$renter_first_name' ,"
        . " renter_last_name ='$renter_last_name' ,"
        . " renter_email = '$renter_email' ,"
        . " renter_number = '$renter_number',"
        . " renter_username = '$renter_username',"
        . " renter_password = '$renter_password',"
        . " renter_national_id = '$renter_national_id'"
        . " WHERE renter_id = $id";
mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
header("Location: ../Renters.php");