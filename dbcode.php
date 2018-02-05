<?php
$server="localhost";
$username="root";
$password='';
$database='carproject';
$dbhandle=mysqli_connect($server,$username,$password);
$db_found=mysqli_select_db($dbhandle,$database);
if(!$db_found){

 die ("Database not found"); 
 
}


?>
