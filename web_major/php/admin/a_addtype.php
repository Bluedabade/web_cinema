<?php
    include_once("../../db/db.php");

    if(isset($_POST['submit'])){
        $type = $_POST['type'];



        $sql = "INSERT INTO `m_type`(`name`) 
        VALUES ('$type')";
   
        if($conn ->query($sql) === true){
            echo"<script>alert('สำเร็จ'); window.location='../../pages/admin/a_index.php';</script>";
            
        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='../../pages/admin/a_addtype.php';</script>";

        }
    }
?>