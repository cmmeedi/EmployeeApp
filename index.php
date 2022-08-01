<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css"/>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
      integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
      crossorigin="anonymous"
    ></script>

    <title>Employee App</title>
  </head>
<body>

<?php 

//This includes the code to be able to connect to the DB
include "db_connector.php";
//This includes the code to be able to search and display all the jokes in the DB

?>

<!-- This is the Nav Bar -->
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Emp-Grenade</a>
		<button 
		class="navbar-toggler" 
		type="button" 
		data-toggle="collapse" 
		data-target="#navbarNav"
		aria-controls="navbarNav" 
		aria-expanded="false"
		aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="add_Employee.php">Add Employee</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="all_Employees.php">All Employees</a>
				</li>
			</ul>
			<a href="employee_Login.php" class="btn btn-light">Login</a>
        	<a href="add_Employee.php" class="btn btn-outline-light">Add</a>
		</div>
	</nav>
</header>

<!-- This is the form to allow the user to search for keywords to pull up jokes containing those keywords within the db -->
    <div id="employeeSearch" class="container">
      <form action="search_employee.php">
        <div class="form-group">
          <label for="employee" class="display-4"> Search for employee </label>
          <input
            type="text"
            class="form-control col-4"
            id="employee"
            name="employee"
            aria-describedby="employeeSearch"
          />
          <small id="employeeSearchHelp" class="form-text text-muted"
            >Enter the employee you would like to search</small
          >
        </div>
        
        <button type="submit" class="btn btn-primary">Search</button>
        
      </form>
    </div>

<hr>


   

<?php


    //Then the DB is closed
$conn->close();
?>


<footer class="text-light bg-dark text-right pt-2">
    <h5 class="display-5">&copy Chester Meedi, 03/21/2022 ALL RIGHTS RESERVED</h5>
</footer>
</body>

</html>