<?php
    include_once("../../db/db.php");

if(isset($_POST['submit'])){
        $u_name = $_POST['u_name'];
        $u_birth = $_POST['u_birth'];
        $u_email = $_POST['u_email'];
        $u_password = $_POST['u_password'];

        $sql = "INSERT INTO `m_user`(`u_name`, `u_email`, `u_password`, `u_birth`) 
        VALUES ('$u_name','$u_email','$u_password','$u_birth')";

        if($conn -> query($sql) === true){
            echo"<script>alert('สำเร็จ'); window.location='../../pages/user/u_login.php';</script>";

        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='../../pages/user/u_index.php';</script>";

        }
    }
