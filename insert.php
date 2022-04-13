<html>
<body>
<?php

$servername ="localhost";
$username = "root";
$password="madusank17112";
$dbname="group12";
$conn = new mysqli($servername,$username ,$password,$dbname);

if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}

mysqli_select_db($conn,"group12");

$sql = "INSERT INTO inquiry(cat_name,email,cmd) VALUES('$_POST[cat_name]','$_POST[mail]','$_POST[cmd]')";
if(!mysqli_query($conn,$sql))
{
    die("error".mysqli_error($conn));
  
}
else
{
	 echo "<div style='margin:20% 30%;'><h4>Thank You</h4></div>";
         header('Refresh:2; URL=life.php');
}

mysqli_close($conn);
?>
</body>
</html>