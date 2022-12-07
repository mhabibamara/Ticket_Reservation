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