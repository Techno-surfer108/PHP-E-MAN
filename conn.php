<?php

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="signup,login,logout";

if (!$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){
    die("failled to connect!");
}



?>