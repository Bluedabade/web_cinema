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
    <form action="../../php/admin/a_addmovie.php" method="post" enctype="multipart/form-data">
    <div class="contaider">
        <div class="item">
        <label for="">ชื่อภาพยนต์</label>
        <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="m_name" require>
        <label for="">โปสเตอร์หนัง</label>
        <input type="file"  placeholder="กรุณากรอกข้อมูล..."   name="img" require>
        <label for="">วันที่</label>
        <input type="date"  placeholder="กรุณากรอกข้อมูล..."   name="m_date" require>
        <label for="">เริ่ม</label>
        <input type="time"  placeholder="กรุณากรอกข้อมูล..."   name="m_time_start" require>
        <label for="">จบ</label>
        <input type="time"  placeholder="กรุณากรอกข้อมูล..."   name="m_time_end" require>
        <input value="<?php echo $_GET['type_id'] ?>" hidden type="number"  placeholder="กรุณากรอกข้อมูล..."   name="type_id" require>

      
        </div>
      
         
        <button name="submit" type="submit" class="ASS_mini" name="#">ยืนยัน</button>
        <a href="a_movie.php" class="ASS_mini_">ยกเลิก</a>

    </div>
    </form>
</body>
</html>