<!-- include the connection -->
<?php include('../includes/connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User -registration</title>
    <!-- bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link incase we need icons--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
    <form action="user_registration.php" method="POST" enctype="multipart/form-data">
        <!-- first name field-->
        <div class="form-outline mb-4">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" id="first_name" class="form-control" placeholder="Enter your first name" autocomplete="off" required="required" name="first_name"/>
        </div>
        <!-- last name field-->
        <div class="form-outline mb-4">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" id="last_name" class="form-control" placeholder="Enter your last name" autocomplete="off" required="required" name="last_name"/>
        </div>
        <!-- email field-->
        <div class="form-outline mb-4">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="user_email"/>
        </div>
        <!-- password field-->
        <div class="form-outline mb-4">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
        </div>
        <!-- confirm password field-->
        <div class="form-outline mb-4">
            <label for="conf_user_password" class="form-label">Confirm Password</label>
            <input type="password" id="conf_user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="conf_user_password"/>
        </div>
         <!-- Contact Num field-->
         <div class="form-outline mb-4">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" id="contact_num" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required="required" name="contact_num"/>
        </div>

        <!-- Register button-->
        <div class="mt-4 pt-2">
            <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ? 
                <a href="user_login.php" class="text-danger"> Login</a> 
            </p>
        </div>
    </form>
            </div>   
        </div>    
    </div>
</body>
</html>

<!-- php code to handle backend-->

<?php
//isset() determines if a variable is set and is not NULL
//after that we are checking if the user_register button is clicked since we defined form method above as POST
if(isset($_POST['user_register']))
{
    //assign the attributes to variables
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];

    //the hash will take the password and PASSWORD_DEFAULT is the algorithm used to hash the password as parameters
    $hashed_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'];
    $contact_num=$_POST['contact_num'];


    //select_query for checking if email already exists
    $select_query="select * from `USER` where email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0)
    {
        echo '<script>alert("Email already exists")</script>';
        //die();
    }
    //select_query for checking if passwords match
    else if($user_password!=$conf_user_password)
    {
        echo '<script>alert("Passwords do not match")</script>';
    }
    else
    {
        //insert_query
        $insert_query="insert into `USER` (email,firstName,lastName,hashedPassword,phoneNo) values ('$user_email','$first_name','$last_name','$hashed_password','$contact_num')";
        //query execution, pass in connection variable and query variable
        $sql_execute=mysqli_query($con,$insert_query);

        //for debugging purposes
        if($sql_execute)
        {
            //print the error in alert form. <script> tags mean that is javascript code
            //important to enclose the javascript code in single quotes not double quotes
            echo '<script>alert("Registration Data Inserted Successfully")</script>';

        }
        else
        {
            //otherwise show the error message
            die(mysqli_error($con));
        }
        
    }


    
}
?>