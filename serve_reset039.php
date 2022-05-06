<?php
    require_once 'dbConnection039.php';
    session_start();

    $conn = Database::getConnection();

    $updater = $_SESSION["updater"];
    
    $reqnic = $updater["NIC"];
    $reqpassword = isset($_POST["passwrd"]) ? $_POST["passwrd"] : null;
  
  if($reqnic and $reqpassword){
    $accountFound="SELECT *
    FROM customer_details
    WHERE NIC='$reqnic'";

$result = $conn->query($accountFound);

if ($result->num_rows == 1) {

      $resetpasswrd = "UPDATE customer_details SET password='$reqpassword' WHERE NIC=$reqnic";

      if ($conn->query($resetpasswrd) === TRUE) {
        echo "<div style='margin:20% 30%;'><h4>password is reset successfully</h4></div>";
        header('Refresh:1 ; URL= login039.php');
    } else {
      echo "Error updating record: " . $conn->error;
      header('Refresh:1 ; URL= reset039.php');

      }
  }
    else{
      echo "<div style='margin:20% 30%;'><h4>Invalid NIC</h4></div>";
      header('Refresh:1 ; URL= reset039.php');

    }
  
}
  else{
     echo "<div style='margin:20% 30%;'><h4>Values are not set</h4></div>";
     header('Refresh:1 ; URL= reset039.php');

}



?>