<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
$id = $_GET['areaId'];
$query = "select area_id, area_name,ar_area_name from Area where area_id=$id";
$result = mysqli_query($link, $query);

$rows=array();




while($row = mysqli_fetch_assoc($result)){
   
    $rows [] = $row;
}

echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);