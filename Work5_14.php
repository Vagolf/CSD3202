<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ประกาศตัวแปรราคาและส่วนลด </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
        $pay = 1893;
        $sale = 120;

        if ($pay >=1000) {
            $result = $pay - $sale;
            echo "ราคาสุทธิ: $result บาท";
        } else {
            echo " $pay";
        }
    
    ?>
</body>

</html>