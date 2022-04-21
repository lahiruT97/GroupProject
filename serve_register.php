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
$sql = "INSERT INTO customer_details
VALUES('$_POST[NICNum]','$_POST[title]','$_POST[fullName]','$_POST[number]','$_POST[email]',$_POST[age],'$_POST[username]','$_POST[passwrd]')";

if(!mysqli_query($conn,$sql))
{
    die("error".mysqli_error($conn));
  
}
else
{
    //check if the given username is exists already
  /* $sqlcheck = "SELECT userName
                FROM customer_details
                WHERE userName=$_POST[username]";*/

	 echo "<div style='margin:20% 30%;'><h4>New record Created successfully</h4></div>";
         header('Refresh:2; URL=register12.php');
}

mysqli_close($conn);
?>
</body>
</html>