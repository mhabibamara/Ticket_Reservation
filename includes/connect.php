<?php

//$con is a conection variable which is used to connect to the database
//mysqli_connect(host,username,password,database_name) this information is for musfik's account's database and these credentials can be found in the config.in.php file in C:\xampp\phpMyAdmin
$con=mysqli_connect("itsmushfik.com","itsmushf_471admin","qtwYnRTv8Ra99gm","itsmushf_471");

// Check connection
if($con)
{
    //to print the message if the connection is successful    
    //echo "connected";
}
else
{
    die(mysqli_error($con));
}

?>