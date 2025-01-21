<?php
session_start();
include("../../db/db.php");
if(!$_SESSION['a_id']){
    echo"<script>alert('ไปล็อกอินซะ'); window.location='../../pages/admin/a_login.php';</script>";
}
?>