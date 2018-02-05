<?php
require ("dbcode.php");

if (isset($_POST['upload']))
		{
global $dbhandle;
session_start();
extract ($_POST);

		$image=$_FILES['images']['name'];
		 $specificcarid = $_SESSION['car_id']; 
		$target="images/cars".basename($_FILES['images']['name']);
		
		$description=filter_var($_REQUEST['description'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
		
		$sql="INSERT INTO carimages (car_id, image_path, image_description) values ($specificcarid,'".$target."','".$description."')";
		mysqli_query($dbhandle,$sql);
		
				if(move_uploaded_file($file_tmp=$_FILES['images'] ['tmp_name'],$target))

				{
				echo "<fontsize='5'><font color=\#000000\"> SAVED TO DATABASE";
				}
				else
						{
						echo"<fontsize='5'><font color=\#000000\"> An error Occured";
						}
					echo "
						<script>
						window.location='owner-car-view.php?car_id=$specificcarid';
						</script>";	
						
						
						
		}
	?>	       