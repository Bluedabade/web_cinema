<?php
include("component_php/a_session.php");
if(isset($_GET['type_id'])){
    $_SESSION['type_id'] = $_GET['type_id'];
}
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
  <h1> หนังภาพยนต์</h1> 
  </div>
    <a href="a_addmovie.php?type_id=<?php echo $_SESSION['type_id'] ?>" class="ASS">เพิ่มหนังภาพยนต์</a>
    <div class="search">
    <form action="a_movie.php" method="post">
    <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="m_name" required>
    <button type="submit" class="ASS_mini___" name="submit">ค้นหา</button>
    <a href="a_index.php" class="ASS_mini_">ยกเลิก</a>
    </form>
    </div>
  </div>


<div class="contaider_movi">
<?php
    if(isset($_POST['m_name'])){
        $movie_name = $_POST['m_name'];
        $sql ="SELECT * FROM `m_movie` WHERE `movie_type` = '".$_SESSION['type_id']."' AND `movie_name` LIKE '%$movie_name%'";
    }else{
        $sql ="SELECT * FROM `m_movie` WHERE `movie_type` = '".$_SESSION['type_id']."' ";
        
    }
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
    ?>
    <!-- กาด -->
<div class="card">
    <div class="st">
<img src="../../php/img/<?php echo $row['movie_img'] ?>" alt="">
    </div>

    
    <div class="cm">

        <div class="head">
        <h2><?php echo $row['movie_name'] ?></h2>
        <!-- <p>รอบฉาย: 10:00-12:00</p> -->

        </div>
    </div>

    <div class="bk">
    <a href="a_seat.php?m_id=<?php echo $row['movie_id'] ?>" class="ASS_mini">ดูรอบฉาย</a>
    <a href="../../php/admin/a_delete.php?m_id=<?php echo $row['movie_id'] ?>" class="ASS_mini_">ลบข้อมูล</a>
    <a href="a_edit.php?m_id=<?php echo $row['movie_id'] ?>" class="ASS_mini__">แก้ไข</a>


    </div>
</div>
    <!-- กาด -->
    <?php } ?>


    


    
</div>
</body>
</html>