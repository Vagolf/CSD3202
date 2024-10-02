<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมตรวจสอบสถานะการเข้าสู่ระบบ</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $username = "Woraphon";
    $password = "65122250018";

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username == $username && $input_password == $password) {
        echo "การเข้าสู่ระบบสำเร็จ ยินดีต้อนรับ, $username!";
    } else {
        echo "การการเข้าสู่ระบบผิดพลาด โปรดเช็ค username และ password";
    }
    ?>
</body>

</html>