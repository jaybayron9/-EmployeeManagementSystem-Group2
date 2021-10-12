
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>
<body>

<div class= "container">
<button class= "btn btn-primary my-5"><a href="add.php"
class = "text-light"> Add new employee</a>
     
</button>

<table class="table table-primary" >
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Mobile</th>
                                            <th>City</th>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>Departmetns</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>

                                    <?php 
                                    include 'connection.php';
                                    $sno = 0;
                                    $get_employee = mysqli_query($con, "SELECT * from employees inner join departments on departments.department_id = employees.department_id");
                                    while($Employee_data = mysqli_fetch_array( $get_employee))
                                    {
                                      $sno = $sno + 1;
                                   

                                  
                                   

                                    ?>

                                        <tr>
                                            <td><b><?php  echo $sno  ?></b></td> 
                                            
                                            <td><?php  echo $Employee_data['fullname'];  ?></td>
                                            <td><?php  echo $Employee_data['address'];  ?></td>
                                            <td><?php  echo $Employee_data['gender'];  ?></td>
                                            <td><?php  echo $Employee_data['mobile'];  ?></td>
                                            <td><?php  echo $Employee_data['city'];  ?></td>
                                            <td><?php  echo $Employee_data['company'];  ?></td>
                                            <td><?php  echo $Employee_data['position'];  ?></td>
                                            <td><?php  echo $Employee_data['email'];  ?></td>
                                            <td><?php  echo $Employee_data['dept_name'];  ?></td>
                                           
                                            <td style="width: 500px;">
                                            <a href="update.php?employee_id=<?php echo $Employee_data['employee_id'];  ?>" class="btn btn-success" style="box-shadow: 5px 5px 5px 0 gray;"><b>Update</b></a>&nbsp;&nbsp;
                                            <a href="delete.php?employee_id=<?php echo $Employee_data['employee_id']; ?>" class="btn btn-danger" style="box-shadow: 5px 5px 5px 0 gray;"><b>Delete</b></a>
                                               
                                            </td>
                                        </tr>
                                        <?php
                                            
                                    }
                                           
                                        ?>
                                       
                                    </tbody>
                                </table>
</div>
                             
                            </div>
                        </div>
                    </div>

                </div>
</div>


