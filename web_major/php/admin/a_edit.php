<?php
include_once("../../db/db.php");
if(isset($_POST['submit'])){
    $m_name = $_POST['m_name'];
    $m_date = $_POST['m_date'];
    $m_time_start = $_POST['m_time_start'];
    $m_time_end = $_POST['m_time_end'];
    $m_id = $_POST['m_id'];

    $temp = explode('.', $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "../img/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "UPDATE `m_movie` SET `movie_name`='$m_name'
        ,`movie_img`='$filename'
        ,`movie_date`='$m_date'
        ,`movie_start_time`='$m_time_start'
        ,`movie_end_time`='$m_time_end'
        WHERE `movie_id` = '$m_id' ";

        if($conn -> query($sql) === true){
           
            echo"<script>alert('สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
        }else{
            echo"<script>alert('1ไม่สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
        }
    }else{
        $sql = "UPDATE `m_movie` SET `movie_name`='$m_name'
        ,`movie_date`='$m_date'
        ,`movie_start_time`='$m_time_start'
        ,`movie_end_time`='$m_time_end'
        WHERE `movie_id` = '$m_id' ";

        if($conn -> query($sql) === true){
           
            echo"<script>alert('สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
        }else{
            echo"<script>alert('1ไม่สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
        }
    }
}else{
    echo"<script>alert('3ไม่สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
}