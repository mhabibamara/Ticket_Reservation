<!-- include the connection -->
<?php include('../includes/connect.php');
@session_start();
?>

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
    <style>
        body{
            overflow-x:hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
    <form action="" method="POST">
        
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
    

        <!-- Login button-->
        <div class="mt-4 pt-2">
            <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? 
                <a href="user_registration.php" class="text-danger"> Register</a> 
            </p>
        </div>
    </form>
            </div>   
        </div>    
    </div>

</body>
</html>

<?php
    //this isset we are checking weather the user_login button is clicked or not
    if(isset($_POST['user_login']))
    {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
       
        $select_query="Select * from `USER` where 
        email='$user_email'";

        $result=mysqli_query($con,$select_query);

        //count num of rows that come back searching for this specific email
        $row_count=mysqli_num_rows($result);

        $row_data=mysqli_fetch_assoc($result);
        if($row_count>0)
        {
            //User is present in the database

            if(password_verify($user_password,$row_data['hashedPassword']))
            {
                //password is correct
                echo "<script>alert('Login Successful')</script>";
                //redirect to the user dashboard
                //header('location:user_dashboard.php');
                //also set sessional variable for email to what it is now
                $_SESSION['user_email']=$user_email;
                echo "<script>window.open('../index.php','_self')</script>";

                //if sessional buyin variable is true then redirect to payment page
                //but if it is not true then redirect to user dashboard

                /*
                if(isset($_SESSION['buying']))
                {
                    header('location:payment.php');                   
                    echo  "<script>window.open('payment.php','_self')</script>";
                    $_SESSION['user_email']=$user_email;
                   
                }
                else
                {
                    header('location:user_dashboard.php');
                    echo  "<script>window.open('profile.php','_self')</script>";
                     $_SESSION['user_email']=$user_email;

                }
                */
            }
            else
            {
                //password is incorrect
                echo "<script>alert('Invalid Credentials')</script>";
            }

        }
        else
        {
            //user is not present in the database
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }

?>