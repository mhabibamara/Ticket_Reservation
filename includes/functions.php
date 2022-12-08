<?php 
include dirname(__FILE__, 2).'\includes\connect.php';

function getUpcomingMatches($con) {
    $sql = "SELECT * FROM MATCHEVENT WHERE DATE > CURRENT_TIMESTAMP";
    $result = $con->query($sql);
    $retval = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $retval[] = $row;
      }
    }

    return $retval;
}

getUpcomingMatches($con);
?>