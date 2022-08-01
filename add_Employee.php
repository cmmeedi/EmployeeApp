<?php

//The file with the db connection code needs to be included in this file
include "db_connector.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$new_first_Name = $_GET["first_Name"];
$new_last_Name = $_GET["last_Name"];
$new_dept_Name = $_GET["dept_Name"];

//By using the 'addslashes()' method the jokes can be properly inserted into the table with punctuations like apostrophes
$new_first_Name = addslashes($new_first_Name);
$new_last_Name = addslashes($new_last_Name);
$new_dept_Name = addslashes($new_dept_Name);

//This SQL statement will search the database for any rows containing the keyword that was searched for.
echo "<h2>The Employee : '" . $new_first_Name . " " . $new_last_Name . "' has been added to the db</h2>";
echo "<h2>in Depertment '" . $new_dept_Name . "' <h2>";

//This will create a username for the employee consisting of the first name, a period and the first initial of their last name
$username = $new_first_Name . "." .  substr($new_last_Name, 0, 1);
//This will do similar of the above but will also add some characters before and after for the password
$password = "!!" . $new_last_Name . "." . substr($new_first_Name, 0, 1) . "123!!";

echo "new Username: " . $username;
echo "<br>";
echo "new Password: " . $password;

//This statement is used to insert data into the database.  
$sql = "INSERT INTO employees_table VALUES (NULL, '$new_first_Name', '$new_last_Name', '$new_dept_Name')";
//This statement is used to insert data into the database.  
$newAcc = "INSERT INTO employee_account VALUES (NULL, '$username', '$password')";

//this variable tests the db connection and then querires it for the information saved in the `sql` variable
//The die() method prevents the variable from being added to the table, the 'mysqli_error' method displayes the error of the db connection '$conn'
$result = $conn->query($sql) or die(mysqli_error($conn));
$added = $conn->query($newAcc) or die(mysqli_errno($conn));

// include "search_all_employees.php"
?>
<hr>
<a href="index.php">Return to the homepage</a>




        
        
        
