


<!doctype html>
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
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Employee</a>
            </li>
            <li class="nav-item active">
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
      <div class="col-12 w-25">
        <!--Form-->
        <div style="margin-top: 30%">
          <h3 class="my-header">Add Department</h3>
        <form method="POST" ng-submit="addDepartment(department_form)">

              
              <input type="text" ng-model="department_form.department_name" class="form-control my-form" placeholder="Department Name"required>
       
              <input type="text" ng-model="department_form.department_description" class="form-control my-form" placeholder="Department Description"required>

               <button type="submit" class="btn btn-success my-btn">Add Department</button>
     

        </form>

      </div>
    </div>
    <div class="container mt-5">
          

        <!--Table-->
         
          <table class="table table-bordered">
        <thead class="table-dark text-center">
        <th>Department</th>
         <th>Description</th>
         <th>Action</th>
    </thead>
    <tbody class="text-center">
      <div data-ng-init="getDepartment()">
      <tr ng-repeat="department_inf in department_data">

        <td>{{department_inf.department}}</td>
        <td>{{department_inf.description}}</td>
         <td>
          
          <a href="" class="btn btn-primary" ng-click="editDepartment(department_inf)" style="display: {{department_inf.edit}} width: 100px; height: 35px;">Edit &nbsp;&#9998;</a>   
          <a href="" class="btn btn-Delete" ng-click="deleteDepartment(department_inf)" style="display: {{department_inf.delete_btn}}; background-color: #A52A2A; width: 100px: height: 35px ;" >Delete &nbsp;&#10006;</a>
      </td>

      </tr>
    </div>
      
      
    </tbody>
  </table>
</div>

  <div class="modal fade" id="editDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Department</h5>
      </div>
      <div class="modal-body">

        <form method="POST" ng-submit="updateDepartment(department_fetch)">
          <label class="my-label">Department</label>
          <input type="text" ng-model="department_fetch.department" class="form-control my-form-modal" placeholder="Department Name">
              
              <label class="my-label">Description</label>
              <input type="text" ng-model="department_fetch.description" class="form-control my-form-modal" placeholder="Department Description">
          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" ng-click="closeEditDep()">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

  </div>
</div>
</div>
</div>







          </div>
      </div>
    </div>



   </main>
   <form method="POST">




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
