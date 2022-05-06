<html>
<body>
<?php

include 'dbConnection039.php';
$conn = Database::getConnection();


if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}

$reqemail=isset($_POST["mail"])?$_POST["mail"]:null;
$reqcmd=isset($_POST["cmd"])?$_POST["cmd"]:null;



if($reqemail and $reqcmd){
    
        if(strlen($reqcmd)<100){

mysqli_select_db($conn,"group12");

$sql = "INSERT INTO inquiry(cat_name,email,cmd) VALUES('$_POST[cat_name]','$reqemail','$reqcmd')";
        if(!mysqli_query($conn,$sql))
        {
            die("error".mysqli_error($conn));
        
        }
        else
        {   
            echo "<div style='margin:20% 30%;'><h4>inquired successfully</h4></div>";
                 header('Refresh:2; URL=life.php');
        }
    }
else{
    echo "<div style='margin:20% 30%;'><h4>Enter your message properly 100 characters!</h4></div>";
    header('Refresh:2; URL=life.php');
}   
}

mysqli_close($conn);
?>
</body>
</html>
