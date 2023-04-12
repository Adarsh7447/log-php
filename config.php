<?php
/*
This file contains database configuration assuming you are running on 
mysql using user "root"
Name  : ADARSH
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

//try connecting to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
//CHECK THE CONNECTION
if($conn == false){
    dir('Error: Cannot connect');
}

?>