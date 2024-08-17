<?php

$con = new mysqli('localhost', 'root', '', 'KualaDB' );

if(!$con){
    die(mysqli_error($con));
}
?>