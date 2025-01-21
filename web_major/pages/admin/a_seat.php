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
    <div class="contaider_monitor">
        <div class="monitor">
จอภาพยนต์
        </div>
    </div>


    <div class="contaider_monitor" style="margin-top:5rem;">
        <form action="" method="post">
        <table>
            <thead>
            <tr>
            <th></th>
            <th></th>
            <th></th>
            <th> </th>
            <th> </th>
            </tr>
            </thead>
            <tbody>
                <?php
                        $sql ="SELECT * FROM `m_seat` WHERE `seat_m_id` = '".$_GET['m_id']."' ";
                        $result = $conn->query($sql);
                        ?>
                        <tr>
                        <td > A </td>
                        <?php
                        $i = 0;
                        while($row = $result->fetch_assoc()){
                        
                            if($i == 4){
                                
                        ?>
                            </tr>
                            <tr>
                            <td > B </td>
                        <?php
                    }?>
                        <?php
                        if($row['seat_user_id']==0){
                        ?>
                        <td class=""> <?php echo $row['seat_no'] ?> <input type="checkbox" name="#" id=""></td>
                        <?php }else{
                         ?>
                        <td class="active"> <?php echo $row['seat_no'] ?> <input type="checkbox" name="#" id=""></td>

<?php
                    }?>
                        <?php
                        $i++;
                        }
                        ?>
                </tr>

            </tbody>

           

        </table> <br>
        <div class="d" style="display:flex; justify-content:center;     flex-direction: column;">
            <div class="w"  style="display:flex; justify-content:center;     flex-direction: row; gap:2rem;">
        <a href="a_time.php" class="ASS_mini_" name="#">ยกเลิก</a>

        <a href="a_time.php" class="ASS_mini" name="#">กลับ</a>
        </div>
        <h2>รายได้:</h2>
        
        </div>

        </form>

    </div>
</body>
</html>