<?php
    include_once("db.php");
    $sql ="";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>