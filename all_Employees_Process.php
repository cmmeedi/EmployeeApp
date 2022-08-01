<?php

include "db_connector.php";

$sql = "SELECT * FROM employees_table";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    echo "Employee Name: " . $row["first_Name"] . " " . $row["last_Name"];
    echo "<br>";
    echo "from Department: " . $row["dept_Name"];
}