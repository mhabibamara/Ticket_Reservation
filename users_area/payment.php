<?php 
  session_start();
  include dirname(__FILE__, 2).'\header.php';
  include dirname(__FILE__, 2).'\includes\functions.php';
?>

<h2>Thank you for your Purchase</h2>
Total price of the purchase, <?php setTicketsToUser($con, $_SESSION['cart'], $_SESSION['user_email']) ?>

<?php 
    include dirname(__FILE__, 2).'\footer.php';
?>