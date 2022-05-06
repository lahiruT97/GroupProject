<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <?php
    include('./dbConnection039.php');
    session_start();

    $conn = Database::getConnection();
   
    

//check whether any username is there
mysqli_select_db($conn,"group12");
$sql = "SELECT userName,NIC
        FROM customer_details
        WHERE userName='$_POST[username]' OR NIC='$_POST[NICNum]'";

$result = $conn->query($sql);

if ($result->num_rows == 0) {

    //check if the policy number and given NIC is matched
    $sqlpn="SELECT NIC
            FROM policyncustomer
            WHERE policy_Number = '$_POST[policyNum]'";

    $result = $conn->query($sqlpn);


    if($result->num_rows == 0){
        echo "<div style='margin:20% 30%;'><h4>Please inform your agent!<br> There is no record with entered policy number </h4></div>";
        // header('Refresh:2; URL=register039.php');
    }
    else{
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
                echo "<div style='margin:20% 30%;'><h4>New record Created successfully</h4></div>";
                 header('Refresh:2; URL=register039.php');
            }

    }

}
else{
    echo "<div style='margin:20% 30%;'><h4>This NIC number or username is used!</h4></div>";
    header('Refresh:2; URL=register039.php');
}


mysqli_close($conn);
?>
    </body>
</html>