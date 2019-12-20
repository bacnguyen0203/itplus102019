<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function tinhdiemtongket($toan, $van, $anh) {
            $diemtongket = (($toan*2) + ($van*2) + $anh)/5;
            echo "<br> điểm tổng kết: " . $diemtongket;
        }

        //gọi hàm
        tinhdiemtongket( 5, 6,7);

        //gọi hàm
    $diemtoan = 9;
    $diemvan = 8;
    $diemanh = 6;
    //biến truyền hàm theo đúng thứ tự khi khai báo thamsoos cho hàm
    //truyền biến cho hàm theo thứ tự của tham số
    //tên biến truyền vào và tên tham số hoàn toàn có thể khác nhau
    tinhdiemtongket($diemtoan, $diemvan, $diemanh);
    ?>
</body>
</html>