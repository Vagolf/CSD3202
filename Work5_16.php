<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ใช้ลูป for </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $result =0;
    for ($i = 1; $i <= 100; $i++) {
        $result += $i;
    }
    if($result > 2500){
        echo "ผลรวมเกินกว่าที่กำหนดไว้!";
    }else{
        echo "ผลรวม $result";
    }
    ?>
</body>

</html>