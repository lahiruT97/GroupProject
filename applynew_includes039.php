<!DOCTYPE html>
<body>
<?php

include('./dbConnection039.php');
$conn = Database::getConnection();

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
         header('Refresh:2; URL=ApplyNewPolicy039.php');
}

mysqli_close($conn);
?>
</body>
</html>