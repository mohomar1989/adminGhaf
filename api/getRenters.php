<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");

$query = "select renter_id,renter_first_name,renter_last_name,renter_number,renter_email,renter_username from Renter";
$result = mysqli_query($link, $query);
$rows= new stdClass();
$tmp=array();

$assocRows = array();

if(isset($_GET['asAssoc']))
{
    while($row = mysqli_fetch_assoc($result)){
   $assocRows[] = $row;
    }
    
    echo json_encode($assocRows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

}
else
{
while($row = mysqli_fetch_assoc($result)){
   $tmp[] = array_values($row);
}
   

$rows->data=$tmp;

echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}