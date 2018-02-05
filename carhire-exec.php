<?php
require ("dbcode.php");
                                                 
if(isset($_POST['submit'])){
global $dbhandle;
session_start();
extract($_POST);
$image=$_FILES['car_image']['name'];
$target="images/carhires".basename($_FILES['car_image']['name']);

                 

              $fullname=filter_var($_POST['fullname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
              $email= filter_var($_POST['email'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
              $phonenumber=filter_var($_POST['phonenumber'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
              $cartype=filter_var($_POST['cartype'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
              $price=filter_var($_POST['price'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
              $description=filter_var($_POST['description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
               $txtGalleryName="carhires";  


           $sql="INSERT INTO car_hire (fullname, email,phonenumber,cartype,price,description,image_path) VALUES ('".$fullname."','".$email."','".$phonenumber."',
                                   '".$cartype."','".$price."','".$description."','$target')";
		mysqli_query($dbhandle, $sql); 
    
if (move_uploaded_file($file_tmp=$_FILES['car_image']['tmp_name'],$target))
                  {
                       echo "<font size = '3'><font color=\"#808080\">SAVED TO DATABASE"; 
                    
                  }
                        else
                        {
                             echo "There was a problem uploading image";

                        }

   }  
   echo "<script>
   window.location = 'car-hire.php';
   </script>";
   
   

?>

		