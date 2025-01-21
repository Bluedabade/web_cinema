<?php
include_once("../../db/db.php");

if(isset($_GET['m_id'])){
    $sql = "DELETE FROM `m_movie` WHERE `movie_id` = '".$_GET['m_id']."' ";
    if($conn -> query($sql) === true){
        $sql2 = "SELECT * FROM `m_seat` WHERE `seat_m_id` = '".$_GET['m_id']."'";
        $result = $conn->query($sql2);

        while($row = $result->fetch_assoc()){
            $sql3 = "DELETE FROM `m_seat` WHERE `seat_m_id` = '".$_GET['m_id']."'";
            $conn -> query($sql3);
        }
        echo"<script>alert('สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";

    }
}
?>
