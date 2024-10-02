<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>ฟอร์มที่รับค่าราคาสินค้าและจำนวนสินค้า</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $number = $_POST['number'];
        $sale = $_POST['sale'];
        $result = $number*$sale;
        echo "ราคารวม: $result บาท";
    }
    ?>
</body>

</html>