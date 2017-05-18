<?php

foreach($_FILES['files'] as $key=>$value){
    echo "Key of the array is: ".$key."<br>";
    echo "Elements are : <br>";
    foreach($value as $index=>$v){
        echo "$index : $v <br>";
    }
}
?>