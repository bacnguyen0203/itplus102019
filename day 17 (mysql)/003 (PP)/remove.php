<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST["id"]) && ($_POST["id"] > 0)) {
    $id = (int) $_POST["id"];
    $sqlDelete = "DELETE FROM sinhvien WHERE id=$id";
    echo "<br> SQL thuần : " . $sqlDelete;
    if (mysqli_query($connectMysql, $sqlDelete)) {
        echo "Xóa thành công ";
    } else {
        echo "Xóa thất bại " . mysqli_error($connectMysql);
    }
    echo "<br>xóa bản ghi thành công";
    echo "<a href='index.php'>Quay về trang chủ</a>";
} else {
    echo "dữ liệu gửi đi không hợp lệ";
    exit;
} ?>