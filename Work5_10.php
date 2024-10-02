<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>ฟอร์มที่รับค่าชื่อผู้ใช้และรหัสผ่าน</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            echo "ชื่อผู้ใช้: $username<br>";
            echo "รหัสผ่าน (เข้ารหัสแล้ว): $hashed_password<br>";
        } else {
            echo "กรุณากรอกข้อมูลให้ครบถ้วน!";
        }
    }
    ?>
</body>

</html>