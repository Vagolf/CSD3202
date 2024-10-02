<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่รวมทุกหัวข้อเข้าด้วยกัน </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $pic1 = $_POST['pic1'];
        $pay1 = $_POST['pay1'];
        $num1 = $_POST['num1'];
        $pic2 = $_POST['pic2'];
        $pay2 = $_POST['pay2'];
        $num2 = $_POST['num2'];
        $pic3 = $_POST['pic3'];
        $pay3 = $_POST['pay3'];
        $num3 = $_POST['num3'];

        if (!empty($pic1) && !empty($pay1) && !empty($num1) && !empty($pic2) && !empty($pay2) && !empty($num2) && !empty($pic3) && !empty($pay3) && !empty($num3)) {
            $picAll = array($pic1, $pic2, $pic3);
            $payAll = array($pay1, $pay2, $pay3);
            $numAll = array($num1, $num2, $num3);

            function cal($pic, $pay, $num)
            {

                $item = count($num);
                for ($i = 0; $i < $item; $i++) {
                    echo $pic[$i] . " จำนวน " . $num[$i] . " ชิ้น ราคารวม " . $num[$i] * $pay[$i] . " บาท<br>";
                }
            }
            cal($picAll, $payAll, $numAll);

            $result = 0;
            for ($i = 0; $i < count($numAll); $i++) {
                $all[$i] = $numAll[$i] * $payAll[$i];
                $result += $all[$i];
            }

            $sale = 300;
            if ($result >= 1500) {
                echo "ส่วนลดที่ได้รับ $sale บาท<br>";
                echo "ราคาสุทธิ " . $result - $sale . " บาท";
            } else {
                echo "ส่วนลดที่ได้รับ ไม่มี<br>";
                echo "ราคาสุทธิ " . $result . " บาท";
            }
        } else {
            echo "กรุณากรอกข้อมูลให้ครบถ้วน!";
        }
    }

    ?>


</body>

</html>