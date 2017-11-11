<?php


$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";

$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_set_charset($link, "utf8");

$query = "select
    
    property_reference,
    concat(renter_first_name,' ',renter_last_name),
    property_rent_start_date,
    property_rent_end_date,
    property_rent_yearly_cost,
    property_rent_contract_type,
    property_rent_month_rate,
    property_rent_deposit,
    property_rent_water,
    property_rent_electricity,
    concat(property_rent_current_payments,'/',property_rent_total_payment),
    property_rent_contract_number,
    property_rent_contract_copy,
    property_rent_building_number,
    property_rent_id,
    property_id
    
    
    




From Property_Rent

left join Property on property_id = property_rent_property_id
left join Renter on renter_id = property_rent_renter_id

";


$result = mysqli_query($link, $query);
$rows= new stdClass();
$tmp=array();


while($row = mysqli_fetch_assoc($result)){
   $tmp[] = array_values($row);
}
   

$rows->data=$tmp;

echo json_encode($rows,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);