<?php
include_once("../../db/db.php");
if(isset($_POST['submit'])){
    $m_name = $_POST['m_name'];
    $m_date = $_POST['m_date'];
    $m_time_start = $_POST['m_time_start'];
    $m_time_end = $_POST['m_time_end'];
    $type_id = $_POST['type_id'];

    $temp = explode('.', $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../img/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "INSERT INTO `m_movie`(`movie_name`, `movie_type`, `movie_img`, `movie_date`, `movie_start_time`, `movie_end_time`) 
        VALUES ('$m_name','$type_id','$filename','$m_date','$m_time_start','$m_time_end')";



        if($conn -> query($sql) === true){
            $m_id = mysqli_insert_id($conn);

            $date = date('Y-m-d');
            $time = date("H:i:s");
            $seat_no[0] = "a";
            $seat_no[1] = "b";

            $i = 0;

            while($i <2){
            $f = 1;

                while($f<5){
                    $seat_no_no = $seat_no[$i]."$f";
                    $sql1 = "INSERT INTO `m_seat`(`seat_no`, `seat_m_id`, `seat_date_id`, `seat_time_id`) 
                    VALUES ('$seat_no_no','$m_id','$date','$time')";
                    $f++;
                    $conn -> query($sql1);
                }
                    $i++;

            }
            echo"<script>alert('สำเร็จ'); window.location='a_index.php';</script>";
        }else{
            echo"<script>alert('1ไม่สำเร็จ'); window.location='a_index.php';</script>";
        }
    }else{
        echo"<script>alert('2ไม่สำเร็จ'); window.location='a_index.php';</script>";
    }
}else{
    echo"<script>alert('3ไม่สำเร็จ'); window.location='a_index.php';</script>";
}