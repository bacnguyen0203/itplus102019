<?php
    session_start();
?>

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
    <pre>
        Sesion PHP là biến toàn cục để lưu trữ thông tin phiên làm việc
        trên tất cả các trạng thái con trong trang web
        VD: có domain: www.zing.vn

        ứng dụng session có rất nhiều ứng dụng
        2 ứng dụng phổ biến của session là
        - xây dựng giỏ hàng trên trang thương mại điện tử
        - xây dựng tính năng đăng kí, đăng nhập và session

        session được lưu trữ trên máy chủ server
        Trước tiên muốn sử dụng session cần phải sử dụng hàm:
        session_star() trên cùng mỗi file php
    </pre>
<?php
//khởi tạo session và lưu giá trị vào session
$_SESSION["username"] = "admin";
$_SESSION["useremail"] = "admin@gmail.com";

//in ra tất cả các session đang hoạt động
// $_SESSION là 1 array
echo "<pre>";
print_r($_SESSION);
echo"</pre>";

//truy cập vào 1 session cụ thể
echo "<br>" . $_SESSION["username"];
echo "<br>" . $_SESSION["useremail"];

?>
</body>
</html>