<?php

//$con is a conection variable which is used to connect to the database
//mysqli_connect(host,username,password,database_name) this information is for musfik's account's database and these credentials can be found in the config.in.php file in C:\xampp\phpMyAdmin
$con=mysqli_connect("itsmushfik.com","itsmushf_471admin","qtwYnRTv8Ra99gm","itsmushf_471");

// Check connection
if($con)
{
    //if connection is successful then print the following message to the webpage
    // echo "Connection successful for Ticket Reservation System";
}
else
{
    //if connection is not successful then print the specific error message to the webpage which takes in our connection variable as a parameter
    die(mysqli_error($con));
}

?>