<?php 

$servername = "108.167.157.196";
$username = "m3z8z9h6_admin";
$password = "Intheend13!";
$dbName = "m3z8z9h6_ghafoman";


$provider_name = $_POST['provider_name'];
$provider_email = $_POST['provider_email'];
$provider_number = $_POST['provider_number'];
$id = $_POST['provider_id'];
$query ="UPDATE Owner SET"
        . " provider_name = '$provider_name' "
        . " WHERE provider_id = $id";
if(isset($_FILES['provider_logo']['name'])){
   
$fileName = $_FILES['provider_logo']['name'];
$fileName = uniqid().$fileName;
$tempNAme = $_FILES['provider_logo']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
$logo_url = "http://admin.ghafoman.net/uploads/".$fileName;




// Create connection

$query = "UPDATE Provider SET"
        . " provider_name = '$provider_name' ,"
        . "provider_email = '$provider_email',"
        . "provider_number = '$provider_number',"
        . " provider_logo ='$logo_url' "
        . " WHERE provider_id = $id";
}
$link = mysqli_connect($servername, $username, $password,$dbName);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET CHARACTER SET utf8");
mysqli_query($link, $query);
if($link != null)
mysqli_close($link);
header("Location: ../Providers.php");

 