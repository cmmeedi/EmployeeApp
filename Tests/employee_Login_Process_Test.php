<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connector.php";

$username = $_GET["EMPLOYEE_NAME"];
$password = $_GET["EMPLOYEE_PASSWORD"];

$sql = "SELECT ID, EMPLOYEE_NAME, EMPLOYEE_PASSWORD FROM employee_account WHERE EMPLOYEE_NAME = ' $username ' AND EMPLOYEE_PASSWORD = '$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "no one";
    //This will end the session
    $_SESSION['sesh'] = false;
    die;
}else{
    $row = $result->fetch_assoc();
    
    //here i set the values that will be entered into the cookie
    $name = 'logged_User'; //The cookie is called user
    
    $value = $username; //The cookie will display the username
    
    //I'd like to pull the picure column from the DB to be able to set as a cookie
    //     $pic = 'pic';
    
    //     $pValue = $row['id'];
    
    //     setcookie($pic, $pValue);
    
    //Then the cookie is set
    setcookie($name, $value);
    //time() + (86400),/* this sets the cookie for one day */
    //"/"); /* this allows the cookie to be accessed by the entire site */
    
    if(!isset($_COOKIE[$name])){
        
        echo "Cookie named '" . $name . "' is not set!";
    }else{
        
        
        echo "Success!!!";
        echo "<br>";
        
        //Test code___
        echo "Cookie '" . $name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$name];
        echo "<br>";
        //             echo "Cookie '" . $pic . "' is set!<br>";
        echo "value is: " . $_COOKIE[$name];
        //Test code^^^
        
        $_SESSION['sesh'] = true;
        echo "<hr>";
        
        //Test Code ___
        echo "You are now logged in " . $username;
        //Test Code ^^^
        
        include "homepage.php";
        //This will start a session for the user
        
        echo "<pre>";
        print_r($_SESSION);
        echo "<pre>";
    }
    
    
}
// echo "<br>";
// echo "<a href='index.php'>Home</a>";