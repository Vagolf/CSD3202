<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>ฟังก์ชันคำนวณดัชนีมวลกาย (BMI) </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $BMI = $weight/($height/100)^2;
        if ($BMI < 18.5) {
            echo "BMI $BMI ต่ำกว่าเกณฑ์";
        }elseif($BMI <= 22.9) {
            echo "BMI $BMI อยู่ในเกณฑ์ปกติ";
        }elseif($BMI <= 24.9) {
            echo "BMI $BMI เกินมาตรฐาน";
        }elseif($BMI <= 29.9) {
            echo "BMI $BMI อ้วนระดับ 1";
        }else {
            echo "BMI $BMI อ้วนระดับ 2";
        }
    ?>
</body>

</html>