<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การพัฒนาเว็บด้วย PHP</title>
</head>

<body>
    <h3>โปรแกรมที่ใช้ลูป foreach </h3>
    <h3>Name: วรพล อุดม ID: 65122250018</h3>
    <hr>
    <?php
    $products = array("Intel i9-14900K", "Intel i7-13700K", "Intel i5-1130G7", "Intel i3-7350K");
    foreach ($products as $product) {
        echo "สินค้า: $product<br>";
    }
    ?>
</body>

</html>