<?php
require ("dbcode.php");

global $dbhandle;

if(isset($_POST['update_image_details'])){
 
session_start();
$imageid=$_SESSION['image_id'];
$newDescription = filter_var($_POST['new_description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$sql = mysqli_query($dbhandle,"UPDATE carimages SET image_description = '".$newDescription."' where image_id = $imageid") or die (mysqli_error($dbhandle));
   
   unset($_SESSION['image_id']); 
   echo "
			<script>
			window.location='dashboard.php?';
			</script>";

	 exit();	


}


?>