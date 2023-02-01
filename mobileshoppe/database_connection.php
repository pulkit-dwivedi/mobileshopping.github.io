<?php
    $server="localhost";
    $password="";
    $database="mobile_shoppe";
    $user="root";
    $conn=mysqli_connect($server,$user,$password,$database);
    if(!$conn){
        echo "not connected";
    }
?>