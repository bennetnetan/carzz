<?php
require ("dbcode.php");
//Insert Member
if(isset($_POST['submit'])){
session_start();
extract($_POST);
$image=$_FILES['profile']['name'];
$target="images/profile".basename($_FILES['profile']['name']);
	
	$firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone = filter_var($_POST['phonenumber'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    $idno=  filter_var($_POST['idnumber'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$pass=md5($password);
	   $txtGalleryName="profile"; 

	//see if that member is an identical match to another in the system
	 $sql = mysqli_query($dbhandle,"SELECT email FROM carowners WHERE email='".$email."'  LIMIT 1");
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match>0){
	
	echo "<script>
	if(confirm('User with that email already
	 exists. try registering new user with new email')){
		window.location = './signup.php';
	}
	</script>";
	
		//header('location:signup.php?duplicate');
		//exit();
		
	
	

		}
		
	
	else{
		$sql = mysqli_query($dbhandle,"INSERT INTO carowners(firstname,lastname,phonenumber,email,password,idnumber,profile,reg_date) VALUES ('".$firstname."','".$lastname."','".$phone."',
		'".$email."','".$pass."','". $idno."','$target',now())") or die (mysqli_error($dbhandle));
		if (move_uploaded_file($file_tmp=$_FILES['profile']['tmp_name'],$target))
                  {
                       echo "<font size = '3'><font color=\"#808080\">SAVED TO DATABASE"; 
                    
                  }
                        else
                        {
                             echo "There was a problem uploading image";

                        }
		
   header('location:owner.php?success');
    	
		exit();	}
					
	}



?>
'". $idno."',idnumber,