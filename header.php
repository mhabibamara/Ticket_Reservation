<?php 
  include('includes/connect.php');
  date_default_timezone_set('America/Edmonton');
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Reservation</title>
    <!-- bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="http://localhost/style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <img src="http://localhost/images/cavsLogo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="venue.php">Venue</a>
        </li>
        <?php
          if(!isset($_SESSION['user_email']))
          {
            echo "<a class='nav-link' href='./users_area/user_registration.php'>Register</a>";
          }
        ?>
        <?php
          if(isset($_SESSION['user_email']))
          {
            echo "<a class='nav-link' href='#'>My Tickets</a>";
          }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav me-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li> -->
        <?php
          if(!isset($_SESSION['user_email']))
          {
            echo "<a class='nav-link' href='#'>Welcome Guest</a>";
          }
          else
          {
            echo "<a class='nav-link' href='#'>Welcome ".$_SESSION['user_email']."</a>";
          }
        ?>
        <!-- <li class="nav-item">
          <a class="nav-link" href='./users_area/user_login.php'>Login</a>
        </li> -->
        <?php
          if(!isset($_SESSION['user_email']))
          {
            echo "<a class='nav-link' href='./users_area/user_login.php'>Login</a>";
          }
          else
          {
            echo "<a class='nav-link' href='./users_area/logout.php'>Logout</a>";
          }
        ?>
    </ul>
</nav>
