<?php

//The file with the db connection code needs to be included in this file
include "db_connector.php";

$employeefromform = $_GET["employee"];

//This SQL statement will search the database for any rows containing the keyword that was searched for.
echo "<h2> Show all employees with the name '" . $employeefromform . "'</h2>";
$sql = "SELECT id, first_Name, last_Name FROM employees_table WHERE first_Name LIKE '%". $employeefromform . "%'";
//this variable tests the db connection and then querires it for the information saved in the `sql` variable
$result = $conn->query($sql);

$firstLet = "SELECT first_Name, last_Name FROM employees_table WHERE first_Name LIKE '%" . $employeefromform . "%'";
$firstResult = $conn->query($firstLet);

//if the table is not empty
if($result->num_rows > 0){
    //the row is selected
    while($row = $result->fetch_assoc()){
        //And a concatenated string is created for each row
        echo "id: " . $row["id"] . " employee name: " . $row["first_Name"] .
        " " . $row["last_Name"] . "<br>";
    }
} else{
    //otherwise this message is displayed to let the user know there are no results
    echo "0 results";
}

if($firstResult->num_rows > 0){
    while($row = $firstResult->fetch_assoc()){
        $username = $row["first_Name"] . "." .  substr($row["last_Name"], 0, 1);
        $password = "!!" . $row["last_Name"] . "." . substr($row["first_name"], 0, 1) . "123!!";
        echo "new Username: " . $username;
        echo "<br>";
        echo "new Password: " . $password;
        
        
        
        $newAcc = "INSERT INTO employee_account (ID, EMPLOYEE_NAME, EMPLOYEE_PASSWORD) VALUES (NULL, '$username', '$password')";
        $added = $conn->query($newAcc) or die(mysqli_errno($conn));
        
    }
}else{
    echo "0 results";
}


?>