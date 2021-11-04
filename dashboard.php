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
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" ng-keyup="liveSearch(employee_form)" ng-model="employee_form.employee">
          
          </form>
        </div> <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
        <a href="logout.php" class="float-right nav-link">logout</a>
      </li>
    </ul>
      </div>
      </nav>
      <style type="text/css">
        .my-form{
          margin: 3%;
          border: 1px solid green;
        }
            .my-form-modal{
          margin: 1%;
          border: 1px solid green;
          width: 98%;
        }
         .my-header{
          margin: 3%;
        }
             .my-label{
          margin-left: 3%;
        }
         .my-btn{
          margin: 3%;
        }
          .my-btn > hover{
          margin: 3%;
        }
      </style>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row">
      <div class="col-4">
        <!--Form-->
        <div style="margin-top: 30%">
          <h3 class="my-header">Add Employee</h3>
        <form method="POST" ng-submit="addEmployee(employee_form)">

              
              <input type="text" ng-model="employee_form.fname" class="form-control my-form" placeholder="Employee First Name" required>
       
              <input type="text" ng-model="employee_form.lname" class="form-control my-form" placeholder="Employee Last Name" required>

               <input type="text" ng-model="employee_form.position" class="form-control my-form" placeholder="Employee Position" required>

               <select class="form-control my-form" name="" data-ng-init="getDepartment()" ng-model="employee_form.department" required>
                 <option selected disabled value="">Department</option>
                 <option ng-repeat="department in department_data" value="{{department.department_id}}">{{department.department}}</option>
               </select>

               <input type="text" onfocus="(this.type='date')" name="" class="form-control my-form" placeholder="Employee Start Date" ng-model="employee_form.startDate">

               <button type="submit" class="btn btn-success my-btn">Add Employee</button>
     

        </form>
      </div>

      </div>
          <div class="col-6">
             <div style="margin-top: 20%; margin-left: 10%;">
        <!--Table-->

                  <table class="table table-bordered">
    <thead class="table-dark">
        <th>Employee Name</th>

         <th>Position</th>
         <th>Department</th>
           <th>Start Date</th>
            <th>End Date</th>
            <th>Remarks</th>
             <th> 
              <select ng-change="seeEmployeeViaStatus(employee_form)" ng-model="employee_form.employee_status">
                      <option value="" selected disabled>
                Employment Status
                </option>
                <option value="EMPLOYED">
                  EMPLOYED
                </option>
                   <option value="RESIGNED">
                  RESIGNED
                </option>
                <option value="END OF CONTRACT">
                  END OF CONTRACT
                </option>
                  <option value="TERMINATED">
                TERMINATED
                </option>
              </select>

             </th>
              <th>Action</th>
    </thead>
    <tbody data-ng-init="getEmployee()">
<tr ng-repeat="employee in employee_data">
  <td>{{employee.fullname}}</td>
  <td>{{employee.position}}</td>
    <td>{{employee.department}}</td>
     <td>{{employee.startDate}}</td>
     <td>{{employee.endDate}}</td>
      <td>{{employee.remarks}}</td>
       <td>{{employee.status}}</td>
       <td><a href="" class="btn btn-warning" style="width: 100px;" ng-click="editEmployee(employee)">Edit</a>


        <a href="" style="display: {{employee.leave_btn}}; width: 100px;" class="btn btn-success" ng-click="leaveEmployee(employee)">leave</a>
         <a href="" style="display: {{employee.leave_btn}}; background-color: red; width: 100px;" class="btn btn-warning" ng-click="deleteEmployee(employee)">Delete</a>


        <a href="generateCOE.php?id={{employee.employee_id}}" style="width: 100px;" target="_blank" class="btn btn-primary">COE</a></td>
</tr>
    </tbody>
  </table>



      </div>
      </div>
    </div>



   </main>


    <div class="modal fade" id="editEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Employee Details</h5>
      </div>
      <div class="modal-body">

        <form method="POST" action="php_sccript/updateEmployee.php"> 


              <input type="text" name="fname" value="{{employee_fetch.fname}}" class="form-control my-form-modal" placeholder="Employee First Name" required>
              <input type="hidden" value="{{employee_fetch.employee_id}}" name="eid">
       
              <input type="text" name="lname" value="{{employee_fetch.lname}}" class="form-control my-form-modal" placeholder="Employee Last Name" required>

               <input type="text" name="position" value="{{employee_fetch.position}}" class="form-control my-form-modal" placeholder="Employee Position" required>
  

               <select class="form-control my-form-modal" name="department">
                 <option selected value="{{employee_fetch.department}}">{{employee_fetch.department}}</option>
                <div data-ng-init="getDepartment()">
                 <option ng-repeat="department in department_data" value="{{department.department}}">{{department.department}}</option>
               </div>
               </select>

               <input type="text" onfocus="(this.type='date')" name="startDate" class="form-control my-form-modal" placeholder="Employee Start Date" value="{{employee_fetch.startDate}}">
          

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" ng-click="closeEditEmp()">Close</button>
        <button type="submit" class="btn btn-primary" name="update">Save changes</button>
      </div>
    </form>

  </div>
</div>
</div>
</div>





     <div class="modal fade" id="retractEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Retraction Employee: {{employee_fe.fullname}}</h5>
      </div>
      <div class="modal-body">

        <form method="POST" ng-submit="endEmployee(employee_fe)"> 


              <input type="text" ng-model="employee_fe.remarks" class="form-control my-form-modal" placeholder="Remarks" required>
       

               <select class="form-control my-form-modal" ng-model="employee_fe.status" required>
                <option ng-selected="employee_fe.status" disabled>Status</option>
                  <option value="EMPLOYED">
                  EMPLOYED
                </option>
                   <option value="RESIGNED">
                  RESIGNED
                </option>
                <option value="END OF CONTRACT">
                  END OF CONTRACT
                </option>
                  <option value="TERMINATED">
                TERMINATED
                </option>
               </select>

               <input type="text" onfocus="(this.type='date')" name="" class="form-control my-form-modal" placeholder="Employee End Date" ng-model="employee_fe.endDate">
          

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" ng-click="closeRetract()">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

  </div>
</div>
</div>
</div>





    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright @2021</span>
      </div>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </div>
  </body>
</html>
