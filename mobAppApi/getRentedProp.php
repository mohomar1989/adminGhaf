<?php

//$servername = "108.167.157.196";
$servername = "localhost";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";
$renterId  = $_GET['renter_id'];
$ownerId = $_GET['owner_id'];
$link = mysqli_connect($servername, $username, $password, $dbName);
mysqli_set_charset($link, "utf8");

$query = "select 

*


From Property_Rent

left join Property on property_id = property_rent_property_id
left join Area  on area_id = property_areaLocation
left join Country  on country_id = property_country
left join City  on city_id = property_city
left join Provider  on provider_id = property_provider
Left join PropertyType  on propertyType_id = property_type 
left join Renter on renter_id = property_rent_renter_id
";

if(isset($_GET['renter_id']))
$query.="where property_rent_renter_id=$renterId";
else
    $query.="where property_owner=$ownerId";
$result = mysqli_query($link, $query);
$rows = array();



while ($row = mysqli_fetch_assoc($result)) {

    $property_id = $row['property_id'];
    $row['Location'] = $row['country_name'].",".$row['city_name'].",".$row['area_name'];
    $getImageQuery = "select image_url as imageUrl, image_property as imageProperty from Property_Image where image_property=$property_id";
    $imagesResult = mysqli_query($link, $getImageQuery);
    $imagesRows = array();
    while ($imagesRow = mysqli_fetch_assoc($imagesResult)) {
        $imagesRows [] = $imagesRow;
    }
    
    $row['Thumbnail'] = $imagesRows[0]['imageUrl'];

    


    $rows[] = $row;
}
$rowss = array('Properties'=>$rows);
echo json_encode($rowss, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);


