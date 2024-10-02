<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมแสดงผลลัพธ์ฟังก์ชันคณิตศาสตร์</h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    function calAll($num1, $num2)
    {
        $plus = $num1 + $num2;
        $minus = $num1 - $num2;
        $multiply = $num1 * $num2;

        echo "ผลบวก: $plus <br>";
        echo "ผลลบ: $minus <br>";
        echo "ผลหาร: $multiply <br>";
        try {
            if ($num2 == 0) {
                throw new Exception("ไม่สามารถหารด้วยศูนย์ได้");
            }
            $result = $num1 / $num2;
            echo "ผลลัพธ์: $result";
        } catch (Exception $e) {
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
    }
    echo calAll($num1, $num2);
    ?>
</body>

</html>