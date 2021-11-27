<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Employee Management</title>

   <!-- Bootstrap core CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link rel="stylesheet" type="text/css" href="assets/css/ds.css">
   <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
   <script src="assets/js/angular.js"></script>
   <script src="assets/js/employee_management.js"></script>
</head>
<body>
   <div ng-app="employeeApp" ng-controller="employeeAppCtrl">
   	<header>

         <!-- Fixed navbar -->                             
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
               <a class="navbar-brand" href="#">Employee Management</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  	<ul class="navbar-nav mr-auto">
	                    	<li class="nav-item active">
	                        <a class="nav-link" href="dashboard.php">Employee</a>
	                    	</li>
	                    	<li class="nav-item">
	                        <a class="nav-link" href="department_dashboard.php">Department</a>
	                   	</li>
                  	</ul>
               </div> 
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a href="logout.php" class="float-right nav-link">logout</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <!-- Begin page content -->
      <main role="main" class="container">
         <div class="row">
            <div class="col-4">
            	
               <!--Form-->
               <div style="margin-top: 30%">
               	<a class="btn btn-success my-btn" href="dashboard.php">< Back</a>
                  <h3 class="my-header">Add Employee</h3>
                  <form method="POST" ng-submit="addEmployee(employee_form)">
                    	<input type="text" ng-model="employee_form.fname" class="form-control my-form" placeholder="First Name" required>
                     <input type="text" ng-model="employee_form.mname" class="form-control my-form" placeholder="Middle Name" required>
                    	<input type="text" ng-model="employee_form.lname" class="form-control my-form" placeholder="Last Name" required>
                     <input type="text" ng-model="employee_form.position" class="form-control my-form" placeholder="Position" required>
                     <select class="form-control my-form" name="" data-ng-init="getDepartment()" ng-model="employee_form.department" required>
                       <option selected disabled value="">Department</option>
                       <option ng-repeat="department in department_data" value="{{department.department_id}}">{{department.department}}</option>
                     </select>
                     <input type="text" onfocus="(this.type='date')" name="" class="form-control my-form" placeholder="Start Date" ng-model="employee_form.startDate">
                     
                     <button type="submit"  class="btn btn-success my-btn" href="dashboard.php">Add Employee</button>
                     
                    
                 
                  </form>
                     
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
         <div class="container">
            <span class="text-muted">Copyright @2021</span>
         </div>
      </footer>
</div>
</body>
</html>