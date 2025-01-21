<?php
include("component_php/a_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assent/style/form.css">
<style>
    *{
        font
    }
</style>
</head>
<body>
    <form action="../../php/admin/a_addtype.php" method="post">
    <div class="contaider">
        <div class="item">
        <label for="">ชื่อประเภทภาพยนต์</label>
        <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="type" require>
        </div>
      
         
        <button name="submit" type="submit" class="ASS_mini" name="#">ยืนยัน</button>
        <a href="a_index.php" class="ASS_mini_">ยกเลิก</a>

    </div>
    </form>
</body>
</html>