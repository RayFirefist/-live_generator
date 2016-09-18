<?php

$debug = true;

if($_POST['attribute'] != 0){
if($debug == true){
    echo 'Attribute OK!';
}
}
else{
    die("Attribute not present. Attribute can't be null");
}

?>