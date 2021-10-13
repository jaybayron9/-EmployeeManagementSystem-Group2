<?php 

    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <title>HR | Dashboard</title>
</head>
<body>
    <h1>HUMAN RESOURCES</h1>
    <!-- button logout -->
    <a href="logout.php">Logout</a>

    <!-- Drop-down Departments -->
    <select>
        <option hidden="">Choose Department</option>
            <option>HR Department</option>
            <option>IT Department</option>
            <option>Finance Department</option>
    </select>  

    <!-- Button Generate COE -->
    <button>Generate COE</button>

    <!-- Search Button -->                  
    <form action="">
        <input type="text" placeholder="Enter Employee Name">
        <input type="submit" value="Search">

    <!-- Employee table, Add New Employee -->
    </form>            
        <button><a href="add.php">Add New Employee</a></button>
        <table>                                   
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
                    <a href="update.php?employee_id=<?php echo $Employee_data['employee_id'];  ?>"><b>Update</b></a>&nbsp;&nbsp;
                    <a href="delete.php?employee_id=<?php echo $Employee_data['employee_id']; ?>"><b>Delete</b></a>
                </td>
            </tr>

            <?php } ?>

        </table>
</body>
</html>

<?php 

}
else
{
    header("Location: index.php");
    exit();
}

?>