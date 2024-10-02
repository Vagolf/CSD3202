<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>ฟังก์ชันตรวจสอบเลขคู่หรือเลขคี่ </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    function checkEvenOdd($number)
    {
        if ($number % 2 == 0) {
            return "เลขคู่";
        } else {
            return "เลขคี่";
        }
    }
    $number = 117;
    $result = checkEvenOdd($number);
    echo "เลข $number เป็น $result";
    ?>
</body>

</html>