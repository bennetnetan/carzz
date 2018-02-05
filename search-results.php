 <?php require_once("./class.php");  
 
     
     // $location = $_POST['location'];
      $type = $_REQUEST['cartype'];
      $price = $_REQUEST['price'];
      //$image = $_REQUEST['image_path'];
      ?>
 


<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
 <div class="container">
      <table class="table" style="margin-left:20px;color:#008080">
    <thead>
      <tr style="margin:20px">
     
         <th style="font-size:22px;color:#000000;"><b>Car Type<b/></th>
        <th style="margin-left:10dp;font-size:22px;color:#000000;"><b>Price</b></th>
        <th style="margin-left:10dp;font-size:22px;color:#000000;"><b>Contact</b></th>
      </tr>
       <hr/>   
    </thead>
    <tbody >
                <?php Carsproject::listCars($type,$price); ?>

    </tbody>
  </table>
      </div> 
      </div> 