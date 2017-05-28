<?php
$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");
$id = $_GET['id'];
$query = "select property_id, 
    property_reference, 
    property_contract,
    property_type,
    property_description, 
    ar_property_description, 
    property_price,
    property_area, 
    property_beds, 
    property_baths, 
    property_country, 
    property_city,
    property_area,
    property_geolocation, 
    property_owner, 
    property_provider,
    property_360view,
    group_concat(amenity_name) as property_amenities

From Property



left join Area  on area_id = property_areaLocation
left join Country  on country_id = property_country
left join City  on city_id = property_city
left join Owner  on owner_id = property_owner
left join Provider  on provider_id = property_provider
Left join PropertyType  on propertyType_id = property_type
left join Property_Amenity on amenity_property = property_id

where  property_id=$id group by property_id ";
$result = mysqli_query($link, $query);

$rows=array();




while($row = mysqli_fetch_assoc($result)){
   
    $row['property_amenities']= explode(",", $row['property_amenities']);
    $row['property_lat'] = explode(",", $row['property_geolocation'])[0];
    $row['property_long'] = explode(",", $row['property_geolocation'])[1];

    
    $rows [] = $row;
}

echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);