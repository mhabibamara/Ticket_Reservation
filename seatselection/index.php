<?php 
  include dirname(__FILE__, 2).'\header.php';
  include dirname(__FILE__, 2).'\includes\functions.php';



  $matchNo = intval($_GET["match"]);
  $sections = getSeatsForMatch($con, $matchNo);

?>
<div class="container">
  <form action="../users_area/checkout.php" method="post">
    <div class="row">
      <?php foreach ($sections as $section): ?>
      <div class="form-group col-4">
        <div>Section <?php echo $section['number'] ?> - <?php echo ($section['home']==1) ? 'Home' : 'Away'?></div>
          <div class="seatgrid">
            <?php foreach ($section['tickets'] as $seat):?>
            <input type="checkbox" id="<?php echo $seat['seatNumber']?>" name="ticket[]" value="<?php echo $seat['ID']?>" <?php if($seat['availability'] == FALSE) echo 'disabled="disabled"' ?>">
            <?php endforeach ?>
          </div>
      </div>
      <?php endforeach ?>
    </div>
    <div class="row mt-3 justify-content-md-center">
      
      <button type="submit" class="btn btn-primary col-4">Checkout</button>
      
    </div>
  </form>
</div>

<?php 
  include dirname(__FILE__, 2).'\footer.php';
?>
