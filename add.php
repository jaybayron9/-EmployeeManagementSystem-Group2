<?php
include 'connection.php';


if (isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $company=$_POST['company'];
    $postion=$_POST['position'];
    $email=$_POST['email'];
    $dept_name=$_POST['department'];


   
   

    $sql = "INSERT INTO employees (fullname,address,gender,mobile,city,company,position,email,department_id)
    VALUES ('$fullname' ,'$address' , '$gender' , '$mobile' , ' $city' , '$company' , '$postion', '$email', '$dept_name')";
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
    <title>Add</title>
</head>

<body>
    <center>
        <H1>Add Employee </H1>
    </center>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name" name="fullname"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="address" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <label for="gender"> Select your gender</label>
                <select name="gender" autocomplete="off" required>
                    <option value="none" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" placeholder="City" name="city" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Company</label>
                <input type="text" class="form-control" placeholder="Company name" name="company" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" placeholder="Position" name="position" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                    required>
            </div>
            <div class="form-group">
                <label for="department"> Select your department</label>
                <select name="department"  required>
                     <option value="none" selected disabled >Department</option>
                <?php
                     $query = mysqli_query($con, "SELECT * from departments");
                     while($row = mysqli_fetch_array($query)){
                ?>
                   
                    <option value="<?php echo $row['department_id']; ?>"><?php echo $row['dept_name']; ?></option>
       
                <?php
                }
                ?>

</select>
                </select>
            </div>
        
            <button type="submit" class="btn 
            btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>

</html>