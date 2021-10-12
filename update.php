
<?php
include 'connection.php';
$employee_id=$_GET['employee_id'];
$sql =("SELECT * from employees where employee_id= $employee_id");
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
 $fullname= $row['fullname'];  
 $address= $row['address'];  
 $gender = $row['gender'];  
 $mobile = $row['mobile'];  
 $city = $row['city'];  
 $company = $row['company'];  
 $position = $row['position'];  
 $email = $row['email']; 


 

 if (isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $company=$_POST['company'];
    $postion=$_POST['position'];
    $email=$_POST['email'];
    


   
   

    $sql = "UPDATE `employees` SET `employee_id`='$employee_id',`fullname`='$fullname',`address`='$address',`gender`='$gender',
    `mobile`='$mobile',`city`='$city',`company`='$company',`position`='$position',`email`='$email' where employee_id=$employee_id ";
    $result=mysqli_query($con,$sql);
    
    header("location:index.php");
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Update</title>
</head>

<body>
    <center>
        <H1> Update Employee </H1>
    </center>
    <div class="container my-5">
        <form method="post">
        <div class="form-group">
                <label>FullName</label>
                <input type="text" class="form-control" placeholder="Enter your full name" name="fullname"
                   value=<?php echo $fullname;?>>
            </div>
            
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="address"  
                value=<?php echo $address;?>
                    required>
            </div>
            <div class="form-group">
                <label for="gender"> Select your gender</label>
                <select name="gender" value=<?php echo $gender;?> required>
                    <option value="none" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                  
                </select>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" value=<?php echo $mobile;?>
                    required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" placeholder="City" name="city" value=<?php echo $city;?>
                    required>
            </div>
            <div class="form-group">
                <label>Company</label>
                <input type="text" class="form-control" placeholder="Company name" name="company" value=<?php echo $company;?>
                    required>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" placeholder="Position" name="position" value=<?php echo $position;?>
                    required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email"value=<?php echo $email;?>
                    required>
            </div> 
           
        
         
        <button type="submit" class="btn 
            btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>

</html>