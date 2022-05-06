<?php
    $servername="localhost";
    $username="root";
    $password="";

    $conn = new mysqli($servername,$username,$password);

    if($conn->connect_error){
        die("connectin failed :" .$conn->connect_error);
    }
    $sql = "CREATE DATABASE group12";

    if($conn->query($sql)===true){
        echo "Data base crated successfully";
    }
    else{
        echo "failed creating data base :".$conn->error;
    }

    $conn->close();
?>
