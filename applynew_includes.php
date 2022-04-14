<!DOCTYPE html>
<?php

$servername ="localhost";
$username = "root";
$password="";
$dbname="group12";
$conn = new mysqli($servername,$username ,$password,$dbname);

if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}

//Insert values into the database

mysqli_select_db($conn,"group12");
$sql = "INSERT INTO applynew(title,fullName,ContactNumber,email,age,policy_name)
VALUES('$_POST[title]','$_POST[fullName]','$_POST[number]','$_POST[email]','$_POST[age]','$_POST[policy]')";

if(!mysqli_query($conn,$sql))
{
    die("error".mysqli_error($conn));
  
}
else
{
	 echo "<div style='margin:20% 30%;'><h4>New record Created successfully</h4></div>";
         header('Refresh:5; URL=ApplyNewPolicy.php');
}

mysqli_close($conn);
?>
</body>
</html>