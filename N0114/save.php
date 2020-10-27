<?php
include_once "connect.php";
// gọi đến kết nối CSDL thì dùng $connectMysql
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST["tenmathang"]) && isset($_POST["gia"])) {
    $sql = "INSERT mathang(tenmathang, gia) VALUES('".$_POST["tenmathang"]."', '".$_POST["gia"]."')";
    echo $sql;
    $test = $connectMysql->exec($sql);
    var_dump($test);
    header("Location: 0.home.php");
    exit;
} else {
    echo "dữ liệu không hợp lệ";
}