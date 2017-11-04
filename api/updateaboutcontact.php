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

$aboutus1 = $_POST["aboutus1"];
$aboutus2 = $_POST["aboutus2"];
$vision1 = $_POST["vision1"];
$vision2 = $_POST["vision2"];
$aboutusar1 = $_POST["aboutusar1"];
$aboutusar2 = $_POST["aboutusar2"];
$visionar1 = $_POST["visionar1"];
$visionar2 = $_POST["visionar2"];
$whatsapp = $_POST["whatsapp"];
$freeline = $_POST["freeline"];
$office = $_POST["office"];
$email = $_POST["email"];





// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");

$query = "UPDATE CMS,CMS_AR SET "
        . "CMS.aboutus1='$aboutus1',"
        . "CMS_AR.aboutus1='$aboutusar1',"
        . "CMS.aboutus2='$aboutus2',"
        . "CMS_AR.aboutus2='$aboutusar2',"
        . "CMS.vision1='$vision1',"
        . "CMS_AR.vision1='$visionar1',"
        . "CMS.vision2='$vision2',"
        . "CMS_AR.vision2='$visionar2',"
        . "CMS.whatsapp='$whatsapp',"
        . "CMS.freeline='$freeline',"
        . "CMS.office='$office',"
        . "CMS.email='$email' WHERE CMS.id=0 AND CMS_AR.id=0";


mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
header("Location: ../AboutContact.php");