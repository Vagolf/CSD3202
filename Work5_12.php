<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ตรวจสอบการหารด้วยศูนย์ </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    function divide($numerator, $denominator)
    {
        try {
            if ($denominator == 0) {
                throw new Exception("ไม่สามารถหารด้วยศูนย์ได้");
            }
            $result = $numerator / $denominator;
            echo "ผลลัพธ์: $result";
        } catch (Exception $e) {
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
    }

    divide(19, 0);
    ?>
</body>

</html>