<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        cách hàm thông dụng của mảng
        count() unset() is_array() empty() implode() explode()
        ...
        serialize() unserialize()
    </pre>

    <?php
        $tiente = ["USD", "AUD", "EURO", "HKD"];
        $a = 5;
        echo "<pre>";
            print_r ($tiente);
        echo "</pre>";

        //unset() hủy 1 phần tử
        unset($tiente[1]);

        echo "<pre>";
            print_r($tiente);
        echo "</pre>";

        //kiểm tra xem có phải là mảng hay là biến
        var_dump(is_array($tiente));
        var_dump(is_array($a));

        // mảng rỗng trả về true
        // mảng ko rỗng trả về false
        var_dump(empty($tiente));
        $bac=0;
        echo "<br>";
        var_dump(empty($bac));

    $b=1;
    echo "<br>";
    var_dump(empty($b));
    ?>
</body>
</html>