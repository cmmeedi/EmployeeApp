<!DOCTYPE html>
<html lang="en">
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
    
    <link rel="stylesheet" href="styles.css"/>


    <title>Document</title>
  </head>
  <body>
  
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

	<!-- This is the form to allow the user to add a joke with an answer -->
    <div id="add_Employee" class="container">
        <form action="employee_Login_Process.php" method="GET">
        
          <div class="form-group">
            <label for="EmployeeLogin" class="display-4 mt-5">Employee Login</label>
            <br>
            <label for="EMPLOYEE_NAME"> Username </label>
            <input
              type="text"
              class="form-control col-3"
              id="EMPLOYEE_NAME"
              name="EMPLOYEE_NAME"
              aria-describedby="EMPLOYEE_NAME"
            />
            
            <label for="EMPLOYEE_PASSWORD"> Password </label>
            <input
              type="text"
              class="form-control col-3"
              id="EMPLOYEE_PASSWORD"
              name="EMPLOYEE_PASSWORD"
              aria-describedby="EMPLOYEE_PASSWORD"
            />
           
        </div>
          
        <button type="submit" class="btn btn-primary">Login</button>
          
        </form>
    </div>
    
<footer class="text-light bg-dark text-right pt-2">
    <h5 class="display-5">&copy Chester Meedi, 03/21/2022 ALL RIGHTS RESERVED</h5>
</footer>

  </body>
</html>
