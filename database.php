<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "group12";


//========== Create connection========================
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//=================== Create database==================
/*$sql = "CREATE DATABASE group12";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
} 
*/

//=========Create table policy_details=====================
$sqlpolicy = "CREATE TABLE policy_details(
    policyNum_pre   INT(3) AUTO_INCREMENT PRIMARY KEY,
    policy_name  VARCHAR(20) NOT NULL ,
    policy_category VARCHAR(20) NOT NULL
) ";

if ($conn -> query($sqlpolicy)===FALSE){
    echo "Error creating table : ". $conn-> error;
}else{
    echo "TABLE CREATED successfully";
}

//create table customer details=====================
$sqlcustomer = "CREATE TABLE customer_details(
    NIC  VARCHAR(20) NOT NULL  PRIMARY KEY ,
    title   VARCHAR(5) NOT NULL,
    fullName VARCHAR(20) NOT NULL,
    ContactNumber VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    userName VARCHAR(10) NOT NULL,
    password VARCHAR(20) NOT NULL
) ";

if($conn -> query($sqlcustomer)=== FALSE){
    echo "Error creating table : " .$conn -> error; 
}else{
    echo "TABLE CREATED successfully";
}

//insert the data into the table customer details=====================
$sqlpolicy = "INSERT INTO policy_details(policy_name, policy_category) 
            VALUES 
            ('Medi_Plus','Life'),
            ( 'Surgical_Plan','Life'),
            ( 'Hospital_Cash_Plan','Life'),
            ( 'Future_Server','Life'),
            ( 'Saubhagya','Life'),
            ( 'Medi60','Life'),
            ( 'Car','Motor'),
            ( 'Motor_Cycle','Motor'),
            ( 'Three_Wheeler','Motor'),
            ( 'SUV','Motor')";

if($conn->query($sqlpolicy)=== TRUE){
    echo "DATA INSERT successfully";
    }
    else{
    echo "Error inserting data to Database:".$conn->error;
    }


//create table for connection of policy numbers and NIC numbers =====================
$sqlpoliNcus = "CREATE TABLE policyNcustomer(
    NIC VARCHAR(20) NOT NULL,
    policyNum_pre   INT,
    PRIMARY KEY (NIC,policyNum_pre),
    FOREIGN KEY(NIC) REFERENCES customer_details(NIC),
    FOREIGN KEY(policyNum_pre) REFERENCES policy_details(policyNum_pre),
    policy_Number INT NOT NULL,
    premium INT NOT NULL,
    activeOnot CHAR NOT NULL
)";

if($conn -> query($sqlpoliNcus)=== FALSE){
    echo "Error creating table : " .$conn -> error; 
}else{
    echo "TABLE CREATED successfully";
}

//CREATE TABLE FOR NEW APPLIERS=====================
$sqlnew = "CREATE TABLE applyNew(
    id INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY, 
    title   VARCHAR(5) NOT NULL,
    fullName VARCHAR(20) NOT NULL,
    ContactNumber INT(10) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    policy_name  VARCHAR(20) NOT NULL 
)";

if($conn -> query($sqlnew)=== FALSE){
    echo "Error creating table : " .$conn -> error; 
}else{
    echo "TABLE CREATED successfully";
}


if($conn -> query($sqlnew)=== FALSE){
    echo "Error creating table : " .$conn -> error; 
}else{
    echo "TABLE CREATED successfully";
}


$conn->close();
?>
</body>
</html>