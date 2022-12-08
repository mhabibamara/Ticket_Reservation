<?php 
  include './includes/functions.php';
  date_default_timezone_set('America/Edmonton');
  include './header.php';
  include('./includes/connect.php');
  @session_start();
?>

<div class="bg-light">
    <h3 class="text-center">Events</h3>
    <p class="text-center">The available events/plans that you can purchase tickets for are listed below</p>
</div>

<div class="container">
    <div class="row">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>ticket Order #</th>
                    <th>Ticket Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- php code to display dynamic data-->
                <?php
                global $con;
                $total = 0;
                $email = $_SESSION['user_email'];
                $mytickets_query="Select * from `TICKET` where email='$email'";
                $result=mysqli_query($con,$mytickets_query);
                while($row=mysqli_fetch_array($result)){
                    $ticket_id=$row['ID'];
                    $select_tickets="Select * from `TICKET` where ID='$ticket_id'";
                    $result_tickets=mysqli_query($con,$select_tickets);
                    while($row_ticket_price=mysqli_fetch_array($result_tickets)){
                        $ticket_price= array($row_ticket_price['price']);
                        $price_table=$row_ticket_price['price'];
                        $ticket_ID=$row_ticket_price['ID'];
                        $gameNumber=$row_ticket_price['gameNumber'];
                        $seatNumber=$row_ticket_price['seatNumber'];
                        $ticket_values= array_sum($ticket_price);
                        $total += $ticket_values;
            
    
              ?>  
                <tr>
                    <td><?php echo $ticket_ID ?></td>
                    <td><?php echo "Game Number: " . $gameNumber . "<br>Seat Number: " . $seatNumber ?></td>
                    <td><?php echo "1" ?></td>
                    <td>$<?php echo $price_table ?></td>
                    
                </tr>

                <?php
            }
        }?>
        
            </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex mb-5">
            <h4 class="px-3">Subtotal:<strong class="text-danger">$<?php echo $total ?></strong></h4>
            <h4 class="px-3">Number Of Tickets:<strong class="text-danger"><?php echo $total / 10 ?></strong></h4>
        </div>
    </div>
</div>



<?php 
  include './footer.php';
?>
