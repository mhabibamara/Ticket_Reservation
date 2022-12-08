<?php 
  include './includes/functions.php';
  date_default_timezone_set('America/Edmonton');
  include './header.php';
?>

<!-- third child-->
<div class="bg-light">
    <h3 class="text-center">Events</h3>
    <p class="text-center">The available events/plans that you can purchase tickets for are listed below</p>
</div>

<!-- third child-->
<div class="row">
  <div class="col-md-10">
    <div class="row">
      <?php 
        $matches = getUpcomingMatches($con); 
        foreach ($matches as $match):
          $datetime = strtotime($match['date'] . ' '. $match['time']. ' MST');
      ?>
      <div class="col-md-4">
        <div class="card">
          <img src="./images/game1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $match['team_1']." VS ".$match['team_2']?></h5>
            <p class="card-text">
              <p><?php echo date("M d, Y - D",$datetime) ?></p>
              <p><?php echo date("G:i T",$datetime) ?></p>
              <p><?php echo $match['stName'] ?></p>
            </p>
            <a href="./seatselection?match=<?php echo $match['gameNumber']?>" class="btn btn-primary">Select</a>
            <a href="#" class="btn btn-secondary">View Details</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
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