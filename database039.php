
<?php


$servername = "localhost";
$username = "root";
$password = "";


//========== Create connection========================
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//=================== Create database==================
$sql = "CREATE DATABASE group12";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
} 

    include('./dbConnection039.php');
    session_start();

    $conn = Database::getConnection();


//=========Create table policy_details=====================
$sqlpolicy = "CREATE TABLE policy_details(
    policyNum_pre   INT(3) AUTO_INCREMENT PRIMARY KEY,
    policy_name  VARCHAR(20) NOT NULL ,
    policy_category VARCHAR(20) NOT NULL
) ";

if ($conn -> query($sqlpolicy)===FALSE){
    echo "Error creating table : ". $conn-> error;
}else{
    echo " policy_details TABLE CREATED successfully";
}

//insert the data into the table policy details=====================
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
    echo "DATA INSERT successfully to policy_details";
    }
    else{
    echo "Error inserting data to Database:".$conn->error;
    }


    //create table for connection of policy numbers and NIC numbers =====================
$sqlpoliNcus = "CREATE TABLE policyNcustomer(
    NIC VARCHAR(20) NOT NULL,
    policyNum_pre   INT,
    PRIMARY KEY (NIC,policyNum_pre),
    FOREIGN KEY(policyNum_pre) REFERENCES policy_details(policyNum_pre),
    policy_Number INT NOT NULL,
    premium INT NOT NULL,
    activeOnot CHAR NOT NULL
)";

if($conn -> query($sqlpoliNcus)=== FALSE){
    echo "Error creating table : " .$conn -> error; 
}else{
    echo " policyncustomer TABLE CREATED successfully";
}

//insert the data into the table policy details=====================
$sqlpolicy = "INSERT INTO policyncustomer  
            VALUES 
                 ('837827567V','09','09777118','150000','N'),
                ( '200047880123','01','01234560','100000','Y'),
                ('612984890V','01','01793949','150000','Y'),
                ( '873420341V','02','02847838','100000','Y'),
                ( '199834560128','02','02874444','100000','N'),
                ('978445730V','03','03847474','150000','N'),
                ('612984890V','03','03347850','150000','Y'),
                ('894567345V','07','07448585','100000','Y'),
                ('880978908V','07','07567996','150000','N'),
                ('200047880123','09','09878787','175000','Y')";
            
if($conn->query($sqlpolicy)=== TRUE){
    echo "DATA INSERT successfully to policyncustomer";
    }
    else{
    echo "Error inserting data to Database:".$conn->error;
    }



//create table customer details=====================
$sqlcustomer = "CREATE TABLE customer_details(
    NIC  VARCHAR(20) NOT NULL  PRIMARY KEY ,
    FOREIGN KEY(NIC) REFERENCES policyncustomer(NIC),
    title   VARCHAR(5) NOT NULL,
    fullName VARCHAR(60) NOT NULL,
    ContactNumber VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    userName VARCHAR(15) NOT NULL,
    password VARCHAR(20) NOT NULL
) ";

if($conn -> query($sqlcustomer)=== FALSE){
    echo "Error creating table : " .$conn -> error; 
}else{
    echo "customer_details TABLE CREATED successfully";
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
    echo "applyNew TABLE CREATED successfully";
}

//close the connection
$conn->close();
?>
