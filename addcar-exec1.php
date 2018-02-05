<?php
require ("dbcode.php");
//Insert Member
global $dbhandle;
session_start();
if(isset($_POST['add_car'])){
	
	$carname = filter_var($_POST['car_model'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	//$location = filter_var($_POST['location'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$price = filter_var($_POST['car_price'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$type = filter_var($_POST['car_id'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $phoneNumber = filter_var($_POST['contacts'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);  
	$description = filter_var($_POST['car_specs'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);   
	
 $owner_id = $_SESSION['id'];

	
		
	
	
		$sql = mysqli_query($dbhandle,"INSERT INTO car_details(owner_id,car_model,car_id,car_price,car_specs,contacts) VALUES ($owner_id,'".$carname."','".$type."','".$price."','".$description."','".$phoneNumber."')") or die (mysqli_error($dbhandle));
		$sql = mysqli_query($dbhandle,"SELECT location FROM cartypes WHERE car_type='".$type."'  LIMIT 1");
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match<=0){
	
	$sql = mysqli_query($dbhandle,"INSERT INTO cartypes(car_type) VALUES('".$type."')") or die (mysqli_error());
		
	
	

		}
    
   header('location:dashboard.php?success');
		
		exit();	}
					
	



?>