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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <img src="./images/cavsLogo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Venue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_login.php">Login</a>
        </li>
    </ul>
</nav>

<!-- third child-->
<div class="bg-light">
    <h3 class="text-center">Events</h3>
    <p class="text-center">The available events/plans that you can purchase tickets for are listed below</p>
</div>

<!-- third child-->
<div class="row">
    <div class="col-md-10">
        <!-- match,section,row,seat -->
        <div class="row">
            <div class="col-md-4">
            <div class="card">
  <img src="./images/game1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Forge FC vs Cavalry FC</h5>
    <p class="card-text">DEC 16 2022 - FRI <br> 2:00 PM MST <br> ATCO Field - Spruce Meadows</p>
    <a href="#" class="btn btn-primary">Select</a>
    <a href="#" class="btn btn-secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
            <div class="card">
  <img src="./images/game2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Edmonton FC vs Cavalry FC</h5>
    <p class="card-text">DEC 23 2022 - FRI <br> 3:00 PM MST <br> ATCO Field - Spruce Meadows</p>
    <a href="#" class="btn btn-primary">Select</a>
    <a href="#" class="btn btn-secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
            <div class="card">
  <img src="./images/game3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Valour FC vs Cavalry FC</h5>
    <p class="card-text">DEC 31 2022 - SAT <br> 5:00 PM MST <br> ATCO Field - Spruce Meadows</p>
    <a href="#" class="btn btn-primary">Select</a>
    <a href="#" class="btn btn-secondary">View Details</a>
  </div>
</div>
            </div>
        </div>
    </div>
    <div class="col-md-2 bg-dark p-0">
        <!-- sidenav -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-danger">
                <a href="#" class="nav-link text-light"><h4>Event Planner</h4></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Select Match</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Select Section</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Select Row</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Select Seat</a>
            </li>
        </ul>
        <!-- Add-Ons -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-danger">
                <a href="#" class="nav-link text-light"><h4>Add-Ons</h4></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Vouchers</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Parking Passes</a>
            </li>
        </ul>
    </div>
</div>

    </div>


<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>