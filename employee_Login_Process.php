<?php 

include "db_connector.php";

$username = $_GET["EMPLOYEE_NAME"];
$password = $_GET["EMPLOYEE_PASSWORD"];

$sql = "SELECT * FROM employee_account WHERE EMPLOYEE_NAME = ' $username ' AND EMPLOYEE_PASSWORD = '$password'";
$result = $conn->query($sql);

if(!result < num_rows){
    echo "no one";
}else{
    echo "logged in";
}

echo $username;
echo "<br>";
echo $password;

?>