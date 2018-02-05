<?php
require ("dbcode.php");

if(isset($_POST['submit'])){
    $name=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];

    move_uploaded_file($temp,"videos/".$name);
    $url="http://localhost/php/video%20upload%20and%20playback/videos/$name";
    $sql="INSERT INTO videos (name,url) VALUES ('$name','$url')";
    	mysqli_query($dbhandle, $sql); 
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Video upload</title>
        </head>
        

         <body>
             <a href="vida.php">Videos </a>
         <form action="videos.php" method="post" enctype="multipart/form-data">
         <input type="file" name="file"/>
            <input type="submit" name="submit" value="upload"/>

         </form>
         <?php
         if(isset($_POST['submit']))
         {
             echo "<br/>".$name." has been uploaded";
         }else 
         {
             echo"jinga sana";
             }
         ?>
             </body>

    </html>