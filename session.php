<?php 
include_once("./dbcode.php");


 $inactive = 1700;
 ini_set('session.gc_maxlifetime',$inactive);//set session max lifetime
 session_start();
 if(isset($_SESSION['testing'])&&(time()-$_SESSION['testing']>$inactive)){
   session_unset();
   session_destroy();
 }
 
   
 global $dbhandle;
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['email'])) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_email=$_SESSION['email'];

$user_query = mysqli_query($dbhandle,"select * from carowners where email = '$session_email'");
$user_row = mysqli_fetch_array($user_query);
$userid = $user_row['owner_id'];
?>


