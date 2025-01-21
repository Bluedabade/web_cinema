<?php
include_once("component_php/u_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="stylesheet" href="../../assent/style/bill.css">

</head>

<body>
    <div class="contaider">
        <div class="bill">
            <div class="head">
                <h2>บิลค่าเข้าชม</h2>
            </div>


            <div class="title_all">
                <?php
                $price = 0;
                foreach ($_POST['seat'] as $seat_id) {
                    $seat_sql = "SELECT * FROM `m_seat` WHERE `seat_id` = '$seat_id';";
                    $seat_result = $conn->query($seat_sql);
                    $seat_row = $seat_result->fetch_assoc();

                    $price = $price + $seat_row['price']
                ?>
                    <div class="title_">
                        <p>ที่นั่ง</p>
                        <p>ราคา</p>
                    </div>
                    <div class="title">
                        <p> <?php echo $seat_row['seat_no'] ?></p>
                        <input value="<?php echo $seat_row['seat_m_id'] ?>" hidden type="number" placeholder="กรุณากรอกข้อมูล..." name="seat_no" require>
                        <input value="<?php echo $seat_row['seat_id'] ?>" hidden type="number" placeholder="กรุณากรอกข้อมูล..." name="seat_id[]" require>


                        <p><?php echo $seat_row['price'] ?> บ.</p>

                    </div>

                <?php
                }
                ?>
            </div>
            <div class="title">

                <p>เรื่อง: </p>
                <input value="" hidden type="number" placeholder="กรุณากรอกข้อมูล..." name="m_name" require>
                <input value="" hidden type="number" placeholder="กรุณากรอกข้อมูล..." name="m_name" require>
                <input value="" hidden type="number" placeholder="กรุณากรอกข้อมูล..." name="m_name" require>


                <p></p>


    <div class="footer">
        <p>รวม <?php echo $price ?> บ.</p>
    </div>

    <button type="" href="../../php/user/u_get_ticket.php?seat_id=">ยืนยัน</button>
    </div>
    </div>
</body>

</html>