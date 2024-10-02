<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>ฟังก์ชันที่คำนวณพื้นที่ของสี่เหลี่ยมผืนผ้า</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    function calArea($width, $height)
    {
        return $width * $height;
    }
    $width = 7;
    $height = 14;
    $area = calArea($width, $height);

    echo "พื้นที่สี่เหลี่ยมผืนผ้า: $area ตารางหน่วย";
    ?>
</body>

</html>