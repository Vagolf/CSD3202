<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ประกาศตัวแปรอายุ (age)</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $age = 10;
    
    if ($age <= 10) {
        echo "เด็ก";
    } elseif ($age <= 20) {
        echo "วัยรุ่น";
    } else {
        echo "ผู้ใหญ่";
    }
    ?>
</body>

</html>