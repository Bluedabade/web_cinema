<?php
    session_start();
    include_once("../../db/db.php");

    if(isset($_POST['submit'])){
        $a_user = $_POST['a_user'];
        $a_pass = $_POST['a_pass'];


        $sql ="SELECT * FROM `m_admin` WHERE a_user =  '$a_user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if(!empty($row) && $row['a_password'] == $a_pass){
            $_SESSION['a_id'] = $row['a_id'];
            echo"<script>alert('สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='../../pages/admin/a_login.php';</script>";
        }
    }
?>