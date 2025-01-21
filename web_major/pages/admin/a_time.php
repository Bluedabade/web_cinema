<?php
include("component_php/a_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assent/style/form.css">
</head>
<body>

  <div class="nav">
  <div class="title">
  <h1> รอบฉาย</h1> 
  </div>
    <!-- <a href="a_addmovie.php" class="ASS">เพิ่มหนังภาพยนต์</a>3.3  -->
    <div class="search">
    <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="#" require>
<button type="submit" class="ASS_mini___" name="">ค้นหา</button>
<a href="a_index.php" class="ASS_mini_">ยกเลิก</a>

    </div>
  </div>


<div class="contaider_movi">
    <!-- กาด -->
<div class="card">
    <div class="st">
<img src="../../img/studentImageReq (1).jfif" alt="">
    </div>

    <div class="cm">
        <div class="head">
        <h2>กล้องสั่งตาย</h2>
        <!-- <p>รอบฉาย: 10:00-12:00</p> -->

        </div>

    </div>

    <div class="bk">
    <a href="a_seat.php" class="ASS_mini">ดูที่นั่งและรายได้</a>
    <a href="a_delete.php" class="ASS_mini_">ลบข้อมูล</a>
    <a href="a_edit.php" class="ASS_mini__">แก้ไข</a>


    </div>
</div>
    <!-- กาด -->


    


    
</div>
</body>
</html>