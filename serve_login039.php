<?php
    include('./dbConnection039.php');
    session_start();

    $conn = Database::getConnection();
?>
<html>
    <body>
<?php
$reqUsername = isset($_POST["username"]) ? $_POST["username"] : null;
$reqPassword = isset($_POST["password"]) ? $_POST["password"] : null;

if ($reqUsername and $reqPassword) {
    $accountFound="SELECT *
                FROM customer_details
                WHERE userName='$reqUsername' AND password='$reqPassword'";
    
    $result = $conn->query($accountFound);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION["user"] = $user;
        
        header('location: account_profile039.php');
    }
    else {
        echo "<div style='margin:20% 30%;'><h4>Please inform your agent!<br> There is no record with entered policy number </h4></div>";
         header('Refresh:2; URL=login039.php');
     }
}

else {
    echo "<div style='margin:20% 30%;'><h4>Values are not assigned!</h4></div>";
    header('Refresh:2; URL=login039.php');
}

?>
    </body>
</html>