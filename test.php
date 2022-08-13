<?php 

session_start();
?>



<html>

<head>
</head>

<body>
<h1>

stuff here

</h1>

</body>
</html>

<?php

include 'db_connector.php';

// echo "Welcome " .  . "<br>";



$sql = "SELECT Admin FROM employee_account WHERE EMPLOYEE_NAME = " . $_COOKIE['logged_User'] . " ";
$result = $conn->query($sql);

print_r($_SESSION);

