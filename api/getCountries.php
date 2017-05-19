<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);

$query = "select country_id, country_name,ar_country_name from Country";
$result = mysqli_query($link, $query);
$rows= new stdClass();
$tmp=array();




while($row = mysqli_fetch_assoc($result)){
   $tmp[] = array_values($row);
    
}
$rows->data=$tmp;
echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);