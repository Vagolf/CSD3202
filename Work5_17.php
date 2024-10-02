<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>ฟอร์มที่รับค่าคะแนนสอบ 3 วิชา </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $math = $_POST['math'];
    $sci = $_POST['sci'];
    $eng = $_POST['eng'];

    $mean = ($math + $sci + $eng) / 3;
    if ($mean >= 80) {
        $grade = "4.00";
    } elseif ($mean >= 75) {
        $grade = "3.50";
    }elseif ($mean >= 70) {
        $grade = "3.00";
    } elseif ($mean >= 65) {
        $grade = "2.50";
    }elseif ($mean >= 60) {
        $grade = "2.00";
    } elseif ($mean >= 55) {
        $grade = "1.50";
    }elseif ($mean >= 50) {
        $grade = "1.00";
    } else {
        $grade = "0";
    }

    echo "ได้เกรด $grade";

    ?>
</body>

</html>