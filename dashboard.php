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
   <link rel="stylesheet" type="text/css" href="assets/css/btnsearch.css">
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
               </div> <ul class="navbar-nav mr-auto">
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
            <div class="col-xs-15 mb-5">
               <div style="margin-top: 13%; margin-left: 2%;">
                  <form action="addemp.php">
                     <button class="addemp" href="addemp.php">Add Employee</button>
                  </form>
                  <form class="formtwo">
                     <input class="searchbox" type="text" placeholder="Enter Employee Name" aria-label="Search" ng-keyup="liveSearch(employee_form)" ng-model="employee_form.employee">
                  </form>

                  <!--Table-->
                  <table class="table table-bordered">
                     <thead class="table-dark">
                        <th><center>Employee Name</center></th>
                        <th><center>Position</center></th>
                        <th><center>Department</center></th>
                        <th><center>Start Date</center></th>
                        <th><center>End Date</center></th>
                        <th><center>Remarks</center></th>
                        <th> 
                           <select ng-change="seeEmployeeViaStatus(employee_form)" ng-model="employee_form.employee_status">
                              <option value="" selected disabled>Employment Status</option>
                              <option value="EMPLOYED"> EMPLOYED</option>
                              <option value="RESIGNED">RESIGNED</option>
                              <option value="END OF CONTRACT"> END OF CONTRACT</option>
                                 <option value="TERMINATED">TERMINATED</option>
                             </select>
                        </th>
                        <th><center>Action</center></th>
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
                           <td>
                              <center>
                                 <a href="" class="btnAction btn-Primary" style="width: 100px;" ng-click="editEmployee(employee)">Edit &nbsp;&#9998;</a>
                              </center>
                             

                               <!-- GENERATE COE -->
                              <center>
                                 <a href="generateCOE.php?id={{employee.employee_id}}" class="btnAction btn-primary" style="width: 100px;" target="_blank" >C.O.E &nbsp;&#9993;</a>
                              </center>
                              <center>
                                 <a href="" class="btnAction btnDelete" style="display: {{employee.delete_btn}}; background-color: none; width: 100px;" ng-click="deleteEmployee(employee)">Delete &nbsp;&#10006;</a>
                              </center>
                           </td>
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
                        <label>First Name:</label>
                        <input type="text" name="fname" value="{{employee_fetch.fname}}" class="form-control my-form-modal" placeholder="Employee First Name" required>
                        <label>Last Name:</label>
                        <input type="hidden" value="{{employee_fetch.employee_id}}" name="eid">
                        <input type="text" name="lname" value="{{employee_fetch.lname}}" class="form-control my-form-modal" placeholder="Employee Last Name" required>
                        <label>Position:</label>
                        <input type="text" name="position" value="{{employee_fetch.position}}" class="form-control my-form-modal" placeholder="Employee Position" required>
                        <label>Department:</label>
                        <select class="form-control my-form-modal" name="department">
                           <option selected value="{{employee_fetch.department}}">{{employee_fetch.department}}</option>
                           <div data-ng-init="getDepartment()">
                              <option ng-repeat="department in department_data" value="{{department.department}}">{{department.department}}</option>
                           </div>
                        </select>
                        <label>Date Started:</label>
                        <input type="text" onfocus="(this.type='date')" name="startDate" class="form-control my-form-modal" placeholder="Employee Start Date" value="{{employee_fetch.startDate}}">
                        <div class="modal-footer">
                        <center>
                        <a href="" class="btnAction btn-Primary" style="display: {{employee.leave_btn}}; width: 100px;"  ng-click="leaveEmployee(employee)">Leave &nbsp;&#10149;</a>
                        </center> 
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
                        <label>Remarks:</label>
                        <input type="text" ng-model="employee_fe.remarks" class="form-control my-form-modal" placeholder="Remarks" required>
                        <label>New Status:</label>
                        <select class="form-control my-form-modal" ng-model="employee_fe.status" required>
                           <option ng-selected="employee_fe.status" disabled>Status</option>
                           <option value="RESIGNED">RESIGNED</option>
                           <option value="END OF CONTRACT">END OF CONTRACT</option>
                           <option value="TERMINATED"> TERMINATED</option>
                        </select>
                        <label>Date Ended</label>
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
