<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Truy cập phần tử của mảng thông qua key (chỉ số)
        $tenbien[key]
    </pre>
    <?php
        $sinhViens = ["a" => "Nguyen A", "b" => "Nguyen B", "c" => "Nguyen C"];

        echo "<pre>";
        print_r($sinhViens);
        echo "</pre>";

        //in được ra các giá trị của các phần tử
        //thông qua chỉ số key của mảng
        echo "<br>" . $sinhViens["a"];
        echo "<br>" . $sinhViens["b"];
        echo "<br>" . $sinhViens["c"];
        
    ?>
</body>
</html>