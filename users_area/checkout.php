<!-- include the connection -->
<?php include('../includes/connect.php');
@session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>


<!-- third child
<div class="bg-light">
    <h3 class="text-center">Events</h3>
    <p class="text-center">The available events/plans that you can purchase tickets for are listed below</p>
</div> -->

<!-- fourth child -->
<div class="row px-1">
    <div class="col-md-12">
        <!-- products -->
        <div class="row">
            <?php
              //remember to set payment sessional variable to true
                // if the session variable for the username is not set
                if(!isset($_SESSION['user_email']))
                {
                  //then the user is redirected to the login page
                  include('user_login.php');
                }
                //but if the session variable is set meaning the user is logged in
                else
                {
                  //then the user is redirected to the payment page
                  //include('payment.php');
                  echo "<script>window.open('payment.php','_self')</script>";
                }
            ?>
           
</div>
<!-- col end -->
</div>
</div>



<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>