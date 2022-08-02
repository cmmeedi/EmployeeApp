<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connector.php";

$username = $_GET["EMPLOYEE_NAME"];
$password = $_GET["EMPLOYEE_PASSWORD"];

$sql = "SELECT ID, EMPLOYEE_NAME, EMPLOYEE_PASSWORD FROM employee_account WHERE EMPLOYEE_NAME = ' $username ' AND EMPLOYEE_PASSWORD = '$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "no one";
}else{
    $row = $result->fetch_assoc();
    $username = $row['first_Name'];
    echo "Success!!!";
}

echo "<a href='index.php'>Home</a>";