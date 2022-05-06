<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname= "group12";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connectin failed :" .$conn->connect_error);
    }

    $sql2 = "CREATE TABLE inquiry
            (id INT AUTO_INCREMENT PRIMARY KEY,
            cat_name VARCHAR(20),
            email VARCHAR(20),
            cmd VARCHAR(100))";
        
    if($conn->query($sql2)===true){
        echo "Table crated successfully";
    }
    else{
        echo "failed creating table :".$conn->error;
    }

    $conn->close();
?>
