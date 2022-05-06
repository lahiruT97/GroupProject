<?php
    include('./dbConnection039.php');
    session_start();

    $conn = Database::getConnection();
?>
<html>
<body>

    <?php
    $reqUsername = isset($_POST["username"]) ? $_POST["username"] : null;
    $reqemail = isset($_POST["email"]) ? $_POST["email"] : null;

    if ($reqUsername and $reqemail) {
        $accountFound = "SELECT *
            FROM customer_details
            WHERE userName='$reqUsername' AND email='$reqemail'";

        $result = $conn->query($accountFound);

        if ($result->num_rows == 1) {
            $updater = $result->fetch_assoc();
            $_SESSION["updater"]= $updater ;

                header('location: reset039.php');
                
        } else {
            echo "<div style='margin:20% 30%;'><h4>Invalid username or email! </h4></div>";
            header('Refresh:2; URL=forget039.php');
        }
    } else {
        echo "<div style='margin:20% 30%;'><h4>Values are not assigned ! </h4></div>";
        header('Refresh:2; URL=forget039.php');
    }


    mysqli_close($conn);
    ?>
</body>

</html>