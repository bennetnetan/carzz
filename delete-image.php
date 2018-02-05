<?php
require ("dbcode.php");

global $dbhandle;

$imageid=$_REQUEST['image_id'];

	
	

	
		
	
	
		   
    $sql = mysqli_query($dbhandle,"SELECT * FROM carimages WHERE image_id = $imageid LIMIT 1") or die (mysqli_error());
    $row = mysqli_fetch_array($sql); 
    $path = $row['imagepath'];
    if(!unlink($path)){
      echo("Error deleting $path");
    }else 
    {
      echo("Deleted path");
    }  
   

		$sql = mysqli_query($dbhandle,"DELETE FROM carimages where image_id = $imageid") or die (mysqli_error());
    
   header('location:dashboard.php?success');
		
	 exit();	





?>


