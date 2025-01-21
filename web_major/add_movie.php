<?php
include_once("db/db.php");
$m_id = 1;
$date = date('Y-m-d');
$time = date("H:i:s");
$seat_no[0] = "a";
$seat_no[1] = "b";

$i = 0;

while($i <2){
    $f = 1;

    while($f<5){
    $seat_no_no = $seat_no[$i]."$f";
        $sql = "INSERT INTO `m_seat`(`seat_no`, `seat_m_id`, `seat_date_id`, `seat_time_id`) 
        VALUES ('$seat_no_no','$m_id','$date','$time')";
    $f++;
        $conn -> query($sql);
    }
    $i++;

}

?>