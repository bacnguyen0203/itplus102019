<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";

// gọi đến kết nối CSDL thì dùng $connectMysql
$sql = "SELECT * FROM mathang";
$stmt = $connectMysql->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
    div a {
        text-decoration: none;
        font-size: 20px;
    }
    #header {
        margin: 60px;
    }
</style>
</head>
<body>
<div id="header" style="text-decoration: none">
    <h1>Một ứng dụng web đơn giản</h1>
    <a href="1.gioithieu.php">1. Giới thiệu</a>
    <a href="2.dangnhap.php"><br>2. Đăng nhập</a>
</div>
<div class="container">

    <h1>Quản lý bán hàng</h1>

    <div class="row" style="margin-bottom: 20px">
        <div class="col-md-12">
            <a href="create.php" class="btn btn-primary">Thêm mặt hàng mới</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên mặt hàng</th>
                    <th>Giá tiền</th>
                    <th>Hành động</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($data as $i => $mathang) { ?>
                    <tr>
                        <td><?php echo $mathang["id"] ?></td>
                        <td><?php echo $mathang["tenmathang"] ?></td>
                        <td><?php echo $mathang["gia"] ?></td>
                        <td>
                            <a href="view.php?id=<?php echo $mathang["id"] ?>" class="btn btn-success">Xem chi tiết</a>
                            <a href="edit.php?id=<?php echo $mathang["id"] ?>" class="btn btn-warning">Cập nhật mặt hàng</a>
                            <a href="delete.php?id=<?php echo $mathang["id"] ?>" class="btn btn-danger">Xóa mặt hàng</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</body>
</html>