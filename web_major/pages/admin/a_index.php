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
  <h1> ประเภทภาพยนต์</h1> 
  </div>
    <a href="a_addtype.php" class="ASS">เพิ่มประเภทภาพยนต์</a>
  </div>


<div class="contaider_movi">
<?php
include_once("component_php/a_show_type.php")
?>


    
</div>
</body>
</html>