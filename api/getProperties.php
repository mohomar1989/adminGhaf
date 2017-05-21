<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");

$query = "select property_id, property_reference, property_contract, propertyType_name, property_description, ar_property_description, property_price, property_area, property_beds, property_baths, country_name, city_name, area_name, property_geolocation, owner_first_name, provider_name, property_360view

From Property

left join Area  on area_id = property_areaLocation
left join Country  on country_id = property_country
left join City  on city_id = property_city
left join Owner  on owner_id = property_owner
left join Provider  on provider_id = property_provider
Left join PropertyType  on propertyType_id = property_type";
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