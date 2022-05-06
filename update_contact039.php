<?php
    require_once 'dbConnection039.php';
    session_start();

    $conn = Database::getConnection();

    $user = $_SESSION["user"];
    
    $reqnic = $user["NIC"];
    $reqemail = isset($_POST["email"]) ? $_POST["email"] : null;
    $reqnumber = isset($_POST["number"]) ? $_POST["number"] : null;
  
  if($reqnic){
    $accountFound="SELECT *
    FROM customer_details
    WHERE NIC='$reqnic'";

$result = $conn->query($accountFound);

if ($result->num_rows == 1) {

    if( $reqemail ){
      $updateemail = "UPDATE customer_details SET email='$reqemail' WHERE NIC=$reqnic";

      if ($conn->query($updateemail) === TRUE) {
        echo "<div style='margin:20% 30%;'><h4>Record updated successfully</h4></div>";
      } else {
      echo "Error updating record: " . $conn->error;
      }
  }

 if( $reqnumber){

    $updatenumber = "UPDATE customer_details SET ContactNumber='$reqnumber' WHERE NIC=$reqnic";

      if ($conn->query($updatenumber) === TRUE) {
        echo "<div style='margin:20% 30%;'><h4>Record updated successfully</h4></div>";
      } else {
        echo "Error updating record: " . $conn->error;
      }
    }
  }
    else{
      echo "<div style='margin:20% 30%;'><h4>Invalid NIC</h4></div>";
    }
  
}
  else{
     echo "<div style='margin:20% 30%;'><h4>Values are not set</h4></div>";
}


header('Refresh:2 ; URL= account_profile039.php');

?>