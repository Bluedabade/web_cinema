<?php
include_once("db.php");
if(isset($_POST['submit'])){
    $a = $_POST[''];

    $temp = explode('.', $_FILES['img']['name']);
    $filename = rand() . '.' . end($temp);
    $filepath = "img/" . $filename;

    if(move_uploaded_file($_FILES['img']['tmp_name'], $filepath)){
        $sql = "";

        if($conn -> qeury($sql) === true){
            echo"<script>alert('สำเร็จ'); window.location='a_index.php';</script>";
        }else{
            echo"<script>alert('ไม่สำเร็จ'); window.location='a_index.php';</script>";
        }
    }
}