<?php
include_once("component_php/u_session.php");
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
    <div class="search">
    <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="#" require>
<button type="submit" class="ASS_mini___" name="">ค้นหา</button>
<a href="a_index.php" class="ASS_mini_">ออกจากระบบ</a>

    </div>
  </div>


<div class="contaider_movi">
    <?php
    
    $sql = "SELECT * FROM `m_movie`";
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
        <pre>รอบฉาย: <?php echo $row['movie_date'] ?> 
ตั้งแต่ <?php echo $row['movie_start_time'] ?> ถึง <?php echo $row['movie_end_time'] ?></pre>

        </div>

    </div>

    <div class="bk">
    <a href="u_seat.php?m_id=<?php echo $row['movie_id'] ?>" class="ASS_mini">ดูที่นั่ง</a>


    </div>
</div>
    <!-- กาด -->
     <?php } ?>


    


    
</div>
</body>
</html>