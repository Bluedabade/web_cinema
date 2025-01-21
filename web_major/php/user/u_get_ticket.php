<?php
    session_start();
    include_once("../../db/db.php");

    if(isset($_POST['submit'])){
        $m_name = $_POST['m_name'];
        $u_id = $_SESSION['u_id'];

        $sql ="UPDATE `m_seat` SET `seat_user_id`='$u_id' WHERE seat_id = '$seat_id' ";
        

        if($result = $conn->query($sql)){

            $sql1 ="INSERT INTO `m_tricket`(`ticket_seat_no`, `ticket_time_start`, `ticket_time_end`, `ticket_movie_name`, `ticket_user`) 
            VALUES ('$','$','$','$','$')";

            echo"<script>alert('สำเร็จ'); window.location='../../pages/user/u_ticket.php';</script>";
        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='../../pages/user/u_index.php';</script>";
        }
    }
?>