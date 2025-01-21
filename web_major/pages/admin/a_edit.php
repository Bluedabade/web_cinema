<?php
include("component_php/a_session.php");
if(isset($_GET['m_id'])){
    $m_id = $_GET['m_id'];
}
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
    <?php
        $sql ="SELECT * FROM `m_movie` WHERE `movie_id` = '$m_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>
    <form action="../../php/admin/a_edit.php" method="post" enctype="multipart/form-data">
    <div class="contaider">
        <div class="item">
        <img src="../../php/img/<?php echo $row['movie_img'] ?>" alt="" sizes="a" srcset="">
        <label for="">โปสเตอหนัง</label>
        <input value="" type="file"  placeholder="กรุณากรอกข้อมูล..."   name="img" require>
        <label for="">ชื่อภาพยนต์</label>
        <input value="<?php echo $row['movie_name'] ?>" type="text"  placeholder="กรุณากรอกข้อมูล..."   name="m_name" require>
        <label for="">วันที่</label>
        <input value="<?php echo $row['movie_date'] ?>" type="date"  placeholder="กรุณากรอกข้อมูล..."   name="m_date" require>
        <label for="">เริ่ม</label>
        <input value="<?php echo $row['movie_start_time'] ?>" type="time"  placeholder="กรุณากรอกข้อมูล..."   name="m_time_start" require>
        <label for="">จบ</label>
        <input value="<?php echo $row['movie_end_time'] ?>" type="time"  placeholder="กรุณากรอกข้อมูล..."   name="m_time_end" require>
        <input value="<?php echo $row['movie_id'] ?>" hidden type="number"  placeholder="กรุณากรอกข้อมูล..."   name="m_id" require>

      
        </div>
      
         
        <button type="submit" class="ASS_mini" name="submit">ยืนยัน</button>
        <a href="a_movie.php" class="ASS_mini_">ยกเลิก</a>

    </div>
    </form>
</body>
</html>