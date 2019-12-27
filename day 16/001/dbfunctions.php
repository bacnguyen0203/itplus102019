<?php
/**
 * Cú pháp kết nối đến CSDL
 * có IP là 192.168.1.1
 * có username là admin7
 * có password là 911
 * có tên cơ sở dữ liệu là : ju
 * sử dụng theo hàm mysqli_connect
 */
$servername = "192.168.1.1";
$username = "admin7";
$password = "911";
$dbname = "ju";

//Check connection
if ($conn -> connect_error) {
    die ("Kết nối thất bại: " . $conn -> connect_error);
}
echo "Kết nối thành công";
?>
