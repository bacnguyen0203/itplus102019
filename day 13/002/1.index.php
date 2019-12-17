<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thay doi gia trị cac phan tu mang chi so
    </pre>
    <?php
        $sinhViens = ["Nguyen A", "Nguyen B", "Nguyen C"];

        echo "<pre>";
        print_r($sinhViens);
        echo "</pre>";

        //in được ra các giá trị của các phần tử
        //thông qua chỉ số key của mảng
        echo "<br>" . $sinhViens[0];
        echo "<br>" . $sinhViens[1];
        echo "<br>" . $sinhViens[2];

        //thay doi
    $sinhViens[0] = "ABC";
    $sinhViens[1] = "DEF";
    $sinhViens[2] = "YZB";

    echo "<br> in ra cấu trúc mảng sau khi thay đổi";
    echo "<pre>";
    print_r($sinhViens);
    echo "</pre>";

    ?>
</body>
</html>