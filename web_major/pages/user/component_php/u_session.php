<?php
session_start();
include("../../db/db.php");
if(!$_SESSION['u_id']){
    echo"<script>alert('ไปล็อกอินซะ'); window.location='../../pages/user/u_login.php';</script>";
}
?>