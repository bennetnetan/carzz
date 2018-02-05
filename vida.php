<?php
require ("dbcode.php");
?>
<html>
<head>
     <meta charset="utf-8">
	<title>all videos</title>
</head>
<body>

<?php
$sql="SELECT * FROM videos";
$query_exec = mysqli_query($dbhandle,$sql);
while($row = mysqli_fetch_array($query_exec))
{
$id = $row['id'];
$name = $row['name'];

echo "<a href='watch.php?id=$id'>$name</a> <br/>";

}
?>


</body>
</html>
