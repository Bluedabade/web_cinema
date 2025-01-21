<?php
    session_start();
    include_once("../../db/db.php");

    if(isset($_POST['submit'])){
        $u_email = $_POST['u_email'];
        $u_pass = $_POST['u_pass'];


        $sql ="SELECT * FROM `m_user` WHERE u_email =  '$u_email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if(!empty($row) && $row['u_password'] == $u_pass){
            $_SESSION['u_id'] = $row['u_id'];
            echo"<script>alert('สำเร็จ'); window.location='../../pages/user/u_index.php';</script>";
        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='../../pages/user/u_login.php';</script>";
        }
    }
?>