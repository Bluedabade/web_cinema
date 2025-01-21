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
    <form action="../../php/admin/a_login.php" method="post">
    <div class="contaider">
        <div class="item">
        <label for="">ชื่อผู้ใช้</label>
        <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="a_user" require>
        </div>
        <div class="item">
        <label for="">รหัสผ่าน</label>

        <input type="password" placeholder="กรุณากรอกข้อมูล..."   name="a_pass"require>
        </div>
         
        <button name = "submit" type="submit" class="ASS_mini">ยืนยัน</button>
    </div>
    </form>
</body>
</html>