<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$tableName = $_GET['table'];
$columnName = $_GET['col'];
$id = $_GET['id'];
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";


// Create connection
$link = mysqli_connect($servername, $username, $password,$dbName);
$query = "DELETE FROM $tableName WHERE $columnName = $id";
mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
