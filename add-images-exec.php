<?php
require ("dbcode.php");
if (isset($_POST['upload'])){  
 global $dbhandle;   
 session_start();
  $specificcarid = $_SESSION['car_id']; 
 // $specificcarid='specific_car_id'; 
 // $_SESSION['car_id']=$carid
  extract($_POST);
  $description=filter_var($_REQUEST['description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    
    $txtGalleryName="cars";
    $error=array();
    $extension=array("jpeg","jpg","png","gif");  
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {           
            
                $file_name=$_FILES["files"]["name"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                if(in_array($ext,$extension))
                {
                    if(!file_exists("images/".$txtGalleryName."/".$file_name))
                    {
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"images/".$txtGalleryName."/".$file_name);
                        $file="images/".$txtGalleryName."/".$file_name;
                         $sql="INSERT INTO carimages (car_id, image_path,image_description) VALUES ($specificcarid,'".$file."','".$description."')";
                         if (!mysqli_query($dbhandle,$sql))
                         {      
                            die('Error: ' . mysqli_error($dbhandle)); 
                                  
                         } 
                         echo "<font size = '3'><font color=\"#808080\">SAVED TO DATABASE";
                             	
						 
						 }
						 
                           else
                    {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"images/".$txtGalleryName."/".$newFileName);
                         $file="images/".$txtGalleryName."/".$file_name;
                         $sql="INSERT INTO carimages (car_id, image_path,image_description) VALUES ($specificcarid,'".$file."','".$description."')";
                         if (!mysqli_query($dbhandle,$sql)or die (mysqli_error($dbhandle)))
                         {
                            die('Error: ' . mysql_error());
                         }
                         echo "<font size = '5'><font color=\"#808080\">SAVED TO DATABASE<br>";   
                         
                             
                    }
                }
                else
                {
                    array_push($error,"$file_name, ");
                }  
               
            } 
            
  echo"<script>
	  
		window.location = './dashboard.php'; 
	
	</script>"; 
   }
  
 


?>