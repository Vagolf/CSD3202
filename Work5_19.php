<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ใช้ลูป foreach</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $number = array(17, 18, 5, 6, 9);

    foreach ($number as $num) {
        if ($num % 2 == 0) {
            echo "คู่ <br>";
        } else {
            echo "คี่ <br>";
        }
    }
    ?>
</body>

</html>