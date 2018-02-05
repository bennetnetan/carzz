<?php

require_once ("./dbcode.php");

   class Carsproject{
     
     public static function getCartype()
	 {
        global $dbhandle;
     $query_search = 'select * from car_details';
     $query_exec = mysqli_query($dbhandle,$query_search);
     if(!empty($query_exec))
		{
			if(mysqli_num_rows($query_exec)>0)
			 {
			 while($row = mysqli_fetch_array($query_exec))
			 echo'<option  value="'.$row['car_model'].'">'.$row["car_model"]. '</option>'; 
			 }
			 else
				{
						   
						    echo'
							<div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
                          <div class="col-md-6">
						   No cars available
						   </div>
						   </div>';
				}    
		}
				 else
				 {
				   echo 'error in query';
				   
				 }
     }
     
      
      public static function listCars($cartype,$price)
	  { 
			 global $dbhandle;
			 $query_search = "select * from car_details where car_model = '".$cartype."' and car_price <= {$price}";
			 $query_exec = mysqli_query($dbhandle,$query_search)or die(mysqli_error($dbhandle));
					if(!empty($query_exec))
					{
						 if(mysqli_num_rows($query_exec)>0){
						 while($row = mysqli_fetch_array($query_exec))
						 echo ' <div class="col-md-12">
						 <tr>
						  
							<td><a href="client-car-view.php?car_id='.$row["car_id"].'" style="font-family:Lucida Sans; font-size:20px;color:#800000;">'.$row['car_model'].'</a></td>
							<td><h5 style="font-family:Lucida Sans; font-size:20px;color:#800000;">'.$row['car_price'].'</h5></td>
							<td><h5 style="font-family:Lucida Sans; font-size:20px;color:#800000;">+254'.$row['contacts'].'</h5></td>
						  </tr>
						  </div>'; 
						}
							else
							{
							   echo'<h5 style="font-family:Roboto; font-size:20px;color:#002aff;">Sorry no Cars available under the specifications provided</h5>';
							}    
					}
							else
							{
								echo 'error in query';
							}
     }  
      public static function getCars($ownerid)
	  { 
				 global $dbhandle;
				 $query_search = "select * from car_details where owner_id = {$ownerid}";
				 $query_exec = mysqli_query($dbhandle,$query_search);
						if(!empty($query_exec))
						{
							 if(mysqli_num_rows($query_exec)>0)
							 {
									 while($row = mysqli_fetch_array($query_exec))
									 echo'<li style="font-size:18px;"><a href="owner-car-view.php?car_id='.$row['car_id'].'" style="color:#02ac02;">'.$row["car_model"]. '</a></li>'; 
							 } 
							 else
							     {
							       echo'
						 <div class="col-md-12">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   You have not uploaded any car.Please Do!!
						   </div>
						   </div>';
							     }    
				     }else
						 {
					   echo 'error in query';
					   }
					   
			}
			
			public static function gotoupload($carid){
			global $dbhandle;
		 $query_search = "select * from car_details where car_id = {$carid}";
		 $query_exec = mysqli_query($dbhandle,$query_search);
			 if(!empty($query_exec))
			 {
				 if(mysqli_num_rows($query_exec)>0)
				 {
						 while($row = mysqli_fetch_array($query_exec))
						 echo'<a href="add-image.php?car_id='.$row['car_id'].'" style="border:thin solid #ffffff; border-radius:5px; padding:8px; background:#008000;color:#ffffff">add Image</a>'; 
				 } else
						 {
						    echo'
						 <div class="col-md-12">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   You have not uploaded any car. Please Do!!
						   </div>
						   </div>';
						 }    
			}
					else
						{
						   echo 'error in query';
						 }
    }
	
           
      
     
     
      public static function getImages($carid)
	  { 
					 global $dbhandle;
					 $query_search = "select * from carimages where car_id = {$carid}";
					 $query_exec = mysqli_query($dbhandle,$query_search)or die(mysqli_error($dbhandle));
			 if(!empty($query_exec))
			 {
						 if(mysqli_num_rows($query_exec)>0)
						 {
								 while($row = mysqli_fetch_array($query_exec))
								 echo '<div class="col-md-4 col-xs-6">
								   <div class="thumbnail" style="margin-top:10px;" >
								  
									<a href="image-update.php?id='.$row['image_id'].'"><img src="'.$row['image_path'].'" style="width:100%;">
									<div class="caption">
									  <p  style="color:#000000;font-family:Roboto;">'.$row['image_description'].'</p>
									</div>
									</a>
								  
									</div>
								  </div>'; 
						 } 
						 else
						 {
						   echo'<div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   No images uploaded
						   </div>
						   </div>';
						 }    
			 }		
						else
							 {
							   echo 'error in query';
							 }
     }   
     public static function getDetails($carid)
	 { 
			 global $dbhandle;
			 $query_search = "select * from car_details where car_id = {$carid}";
			 $query_exec = mysqli_query($dbhandle,$query_search);
		 if(!empty($query_exec))
		 {
				if(mysqli_num_rows($query_exec)>0)
					{
						 while($row = mysqli_fetch_array($query_exec))
						 echo '<div class=col-md-12>
						 <div style="border:groove #000000;background:#ffffff;padding:10px;">
						 <br>
						 <h5  style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Type:</h5> <h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">'.$row['car_model'].'</h5><br><hr>
						 <h5  style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Price: </h5> <h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">'.$row['car_price'].'</h5><br><hr>
						 <h5  style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Description:</h5> <h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">'.$row['car_specs'].'</h5><br><hr>
						 <h5  style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Contact: </h5> <h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;"> +254'.$row['contacts'].'</h5><br><hr>
						 </div>
						 </div>'; 
					} 
						else
							{
								echo'
								 <div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   No Description available available
						   </div>
						   </div>';
							}    
		}             else
						{
                         echo'
						 <div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   Error in Querry
						   </div>
						   </div>';
						}
     }
     
     
     public static function getCarId()
	 {
		global $dbhandle;
		 $query_search = 'select * from cartypes';
		 $query_exec = mysqli_query($dbhandle,$query_search);
				if(!empty($query_exec))
				{
					 if(mysqli_num_rows($query_exec)>0)
					 {
							 while($row = mysqli_fetch_array($query_exec))
							 echo'<option value="'.$row['car_id'].'">'.$row["car_type"]. '</option>'; 
					 } else	
						 {
						    echo'
						 <div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   No cars available
						   </div>
						   </div>';
						 }    
				}
						else
						{
							echo 'error in query';
       
						}
     }    
	 public static function getspecificimage ($imageid)
	 {
			global $dbhandle;
			$query_search="select * from carimages where image_id={$imageid}";
			$query_exec =mysqli_query($dbhandle,$query_search);
				if(!empty($query_search))
					{
					if(mysqli_num_rows($query_exec)>0)
						  {
						  while($row =mysqli_fetch_array($query_exec))
						  echo'<img src="'.$row['image_path'].'" style="max-width:100%;height:250px;width:500px">';
						  }
						  else
								{
								 echo'
						 <div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   No image selected
						   </div>
						   </div>';
								}
					}
					 else{
					  echo 'error in query';
					 }
	
	 
	 
	 
	 }
     
       public static function getDetailsForClient($carid)
	   { 
				 global $dbhandle;
				 $query_search = "select * from car_details where car_id = {$carid}";
				 $query_exec = mysqli_query($dbhandle,$query_search);
			if(!empty($query_exec))
			{
				if(mysqli_num_rows($query_exec)>0)
					{
						 while($row = mysqli_fetch_array($query_exec))
						 echo '
						 <div style="padding:10px;border:groove #ffffff;margin:18px;border-radius:5px;background:#fff8dc;"><br>
                         <h5 style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Car Model: </h5><h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">'.$row['car_specs'].'</h5><br><hr>
						 <h5 style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Car Price: </h5><h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">'.$row['car_price'].'</h5><br><hr>
						 
						 <h5 style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Description: </h5><h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">'.$row['car_specs'].'</h5><br><hr>
						 <h5 style="padding: 5px; font-family:Roboto; font-size:22px;color:#800000;">Contacts: </h5><h5 style="padding: 8px; font-family:Roboto; font-size:19px;color:#000000;">+254 '.$row['contacts'].'</h5><br><hr>
						 </div>'; 
					} 
					else
					{
						 echo'
						 <div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						 Sorry No description of the car available yet
						   </div>
						   </div>';
					}    
			}
							else
							{
									echo 'error in query';
							}
     }    
     
      public static function getImagesForClient($carid)
	  { 
			 global $dbhandle;
			 $query_search = "select * from carimages where car_id = {$carid}";
			 $query_exec = mysqli_query($dbhandle,$query_search);
			if(!empty($query_exec))
			{
					if(mysqli_num_rows($query_exec)>0)

					{
						 while($row = mysqli_fetch_array($query_exec))
						 echo '
						 <div class="col-md-4 col-xs-6">
						   <div class="thumbnail" style="padding:10px;">
						  
							<img src="'.$row['image_path'].'" style="width:100%;">
							<div class="caption">
							 <p>'.$row['image_description'].'</p>
							</div>
						    </div>
							</div>
							'; 
					} 
					else
					{
						echo'<h5 style="padding: 5px; font-family:Roboto; font-size:22px;color:#000000;"><i>No images on this property</i></h5><br><br><hr>';
					}    
			}					else
					 {
					   echo 'error in query';
					 }
		} 
        
     public static function listcarhires() 
     {   
		global $dbhandle;
        $query_search= "select * from car_hire"; 
         $query_exec = mysqli_query($dbhandle,$query_search);
              if(!empty($query_exec))
			  
					{  
						if(mysqli_num_rows($query_exec)>0)
							{
								 while($row = mysqli_fetch_array($query_exec))
								 echo '<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
								 <div class="" style="border: thin ridge #000000; border-radius:3px; margin:5px; margin-bottom:15px; padding:5px;max-height:800px;background:#e76813;opacity:0.9;">
								 <b> <p style="color:#000000;"><h5 style="color:#13bd13; font-family:Roboto;"><i>Name: </i></h5><h5 style="color:#ffffff;">'.$row['fullname'].'</h5></p></b><hr/>
								 <div class="col-md-4 col-xs-8">
                 <div class="thumbnail">
                 <img src="'.$row['image_path'].'" style="max-width:100%;height:250px;width:500px">
                 </div>
                  </div>
								 <div class="caption">
								 <p><h5 style="color:#000000; font-family:Roboto;"><i><b> Email: </b></i></h5> <h5 style="color:#ffffff;">'.$row['email'].'</h5></p><hr/>
								 <p><h5 style="color:#000000; font-family:Roboto;"><i> <b>phone number: </b></i></h5> <h5 style="color:#ffffff;">+254 '.$row['phonenumber'].'</h5></p><hr/>
								 <p><h5 style="color:#000000; font-family:Roboto;"><i> <b>Car Type / Model: </b></i></h5> <h5 style="color:#ffffff;">'.$row['cartype'].'</h5></p><hr/>
								 <p><h5 style="color:#000000;font-family:Roboto;"><i> <b>Car Description:</b> </i></h5><h5 style="color:#ffffff;">'.$row['description'].'</h5></p><hr/>
								 <p><h5 style="color:#000000; font-family:Roboto;"><i> <b>Charges per day: </b></i></h5> <h5 style="color:#ffffff;">'.$row['price'].'</h5></p><hr/>
								 </div>
								 </div>
								</div>';
                     
							}
                  }
        
     }
     
      public static function getSpecificImageDetails($imageid)
	  { 
				 global $dbhandle;
				 $query_search = "select * from carimages where image_id = {$imageid}";
				 $query_exec = mysqli_query($dbhandle,$query_search);
		if(!empty($query_exec))
		{
				if(mysqli_num_rows($query_exec)>0)
				{
					 while($row = mysqli_fetch_array($query_exec))
					 echo '"'.$row['image_description'].'"'; 
				} 
				else
				{
						 echo'
						 <div class="col-md-6">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   No image Description
						   </div>
						   </div>';
				}    
		}
					else
					{
							echo 'error in query';
					}
     } 
	 
	 
						 public static function profilephoto ($ownerid)
	 {
			global $dbhandle;
			$query_search="select * from carowners where owner_id={$ownerid}";
			$query_exec =mysqli_query($dbhandle,$query_search);
				if(!empty($query_search))
					{
					if(mysqli_num_rows($query_exec)>0)
						  {
						  while($row =mysqli_fetch_array($query_exec))
						  echo'<img src="'.$row['image_path'].'" style="max-width:100%;height:250px;width:500px">';
						  }
						  else
								{
								 echo'
						 <div class="col-md-4 col-xs-4">
						   <div style="color:#800000;font-size:22px;font-family:Sans Serrif;margin-top:20px;">
						   No Profile photo
						   </div>
						   </div>';
								}
					}
					 else{
					  echo 'error in query';
					 }
	
	 
	 
	 
	 }
	
	
     
              
 
					 public static function getprofile($ownerid)
	  { 
			 global $dbhandle;
			 $query_search = "select * from carowners where owner_id = {$ownerid}";
			 $query_exec = mysqli_query($dbhandle,$query_search);
			if(!empty($query_exec))
			{
					if(mysqli_num_rows($query_exec)>0)
					{
						 while($row = mysqli_fetch_array($query_exec))
						 echo '<div class="col-md-4 col-xs-4">
						   <div class="thumbnail" style="padding:10px;">
						  
							<img src="'.$row['profile'].'" style="width:100%;">
							
						    </div>
							</div>'; 
					} 
					else
					{
						echo'<h5 style="padding: 5px; font-family:Roboto; font-size:18px;color:#000000;">No profile uploaded</h5><br><br><hr>';
					}    
			}					else
					 {
					   echo 'error in query';
					 }
		} 

}
?>
