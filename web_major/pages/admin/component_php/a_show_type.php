<?php
    $sql ="SELECT * FROM `m_type`";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
?>

<a href="a_movie.php?type_id=<?php echo $row['type_id'] ?>" class="ASS"><?php echo$row['name'] ?> </a>


<?php
    }
?>