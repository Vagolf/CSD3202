<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ตรวจสอบว่าผู้ใช้ป้อนข้อมูลในฟอร์มครบถ้วนหรือไม่</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        if (!empty($name) && !empty($weight) && !empty($height)) {
            echo "ชื่อผู้ใช้: $name<br>";
            echo "น้ำหนัก: $weight<br>";
            echo "ส่วนสูง: $height<br>";
        } else {
            echo "กรุณากรอกข้อมูลให้ครบถ้วน!";
        }
    }
    ?>
</body>

</html>