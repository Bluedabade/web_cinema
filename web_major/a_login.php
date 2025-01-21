<?php
    if(isset($_POST['submit'])){
        $a_user = $_POST['a_user'];
        $a_password = $_POST['a_password'];

        $sql = "";
   
        if($conn ->query($sql) === true){
            echo"<script>alert('สำเร็จ'); window.location='a_index.php';</script>";
        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='a_index.php';</script>";
        }
    }
?>