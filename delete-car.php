<?php
require ("dbcode.php"); 

global $dbhandle;
session_start();
  $specificcarid = $_SESSION['car_id'];
if(isset($_POST['delete_car'])){
	
	

	
		
	
	
		   
    $sql = mysqli_query($dbhandle,"SELECT * FROM car_details WHERE car_id = $specificcarid LIMIT 1") or die (mysqli_error($dbhandle));
    $row = mysqli_fetch_array($sql); 
    $model = $row['car_model'];  
   $sql= mysqli_query
($dbhandle, "SELECT * FROM car_details WHERE car_model ='".$model."' LIMIT 1") 
or die (mysqli_error());


  
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match<=1){
	
	$sql = mysqli_query($dbhandle,"DELETE FROM car_details WHERE car_model = '".$model."'") or die (mysqli_error($dbhandle));
		
	
	

		}
    $sql = mysqli_query($dbhandle,"DELETE FROM car_details where car_id = $specificcarid") or die (mysqli_error($dbhandle));
		$sql = mysqli_query($dbhandle,"DELETE FROM carimages where car_id = $specificcarid") or die (mysqli_error($dbhandle));
    
   header('location:dashboard.php?success');
		
		exit();	}
					
	



?>