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

function getSeatsForMatch($con, $matchNo) {

    $sql = "SELECT sec.number, sec.isHomeSection, sec.gate FROM SECTION sec INNER JOIN MATCHEVENT m ON m.stName = sec.stadium WHERE m.gameNumber = ".$matchNo." ORDER BY sec.number";
    $result = $con->query($sql);
    $sections = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sections[$row['number']] = array('number'=> $row['number'], 'gate'=>$row['gate'], 'home'=> $row['isHomeSection'], 'tickets'=>array());
      }
    }

    foreach ($sections as $section) {
        $sql = "SELECT s.*, t.availability, t.price, t.ID FROM TICKET t INNER JOIN SEAT s ON s.seatNumber = t.seatNumber INNER JOIN SECTION sec ON s.sectionNumber = sec.number WHERE t.gameNumber = ".$matchNo.
            " AND sec.number = ".$section['number'];
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($sections[$section['number']]['tickets'], $row);
            }
        }
    }
    return $sections;
}

function setTicketsToUser($con, $ids, $email) {
    // $sql = "UPDATE TICKET t SET t.availability = FALSE, t.email = ".$email." WHERE t.ID in IN (" . implode(',', $ids) . ")";
    // $result = $con->query($sql);
    $sql = "SELECT SUM(t.price) as p FROM TICKET t WHERE t.ID in IN ('" . implode("','", array_map('mysql_real_escape_string', $ids)) 
    . "')";
    $result = $con->query($sql);
    return $result->fetch_object()->p;
}


// print("<pre>".print_r(getSeatsForMatch($con, 25),true)."</pre>");
?>