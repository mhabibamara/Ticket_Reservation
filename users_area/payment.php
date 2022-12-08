<?php 
  session_start();
  include dirname(__FILE__, 2).'\header.php';
  include dirname(__FILE__, 2).'\includes\functions.php';
?>


<div class="container">
  <h2>Thank you for your Purchase</h2>
  <p>Total price of the purchase, <?php echo setTicketsToUser($con, $_SESSION['cart'], $_SESSION['user_email']) ?></p>
  <a href="../mytickets.php" class="btn btn-primary">View your Tickets</a>
</div>

<?php 
    unset($_SESSION['cart']);
    include dirname(__FILE__, 2).'\footer.php';
?>