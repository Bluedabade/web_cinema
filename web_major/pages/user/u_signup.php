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
    <form action="../../php/user/u_signup.php" method="post">
    <div class="contaider">
        <div class="item">
        <label for="">ชื่อผู้ใช้</label>
        <input type="text"  placeholder="กรุณากรอกข้อมูล..."   name="u_name" require>
        </div>
        
        <div class="item">
        <label for="">อีเมล</label>
        <input type="email" placeholder="กรุณากรอกข้อมูล..."   name="u_email" require>
        </div>
    
        <div class="item">
        <label for="">ว/ด/ป เกิด</label>
        <input type="date" placeholder="กรุณากรอกข้อมูล..."   name="u_birth" require>
        </div>
        <div class="item">
        <label for="">รหัสผ่าน</label>
        <input type="password" placeholder="กรุณากรอกข้อมูล..."   name="u_password" require>
        </div>
        
        <button name="submit" type="submit" class="ASS_mini">ยืนยัน</button>
        <a href="u_signup.php" class="ASS_mini">ยกเลิก</a>
    </div>
    </form>
</body>
</html>